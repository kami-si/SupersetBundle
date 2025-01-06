<?php

namespace Hydra\SupersetBundle\Service;

use Hydra\SupersetBundle\Entity\Caop;
use Hydra\SupersetBundle\Event\SupersetImportEvent;
use Hydra\SupersetBundle\Repository\CaopRepository;
use Hydra\SupersetBundle\Repository\PaysRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Throwable;

final readonly class FileProcessor
{
    public function __construct(
        private EntityManagerInterface   $entityManager,
        private CaopRepository           $caopRepository,
        private PaysRepository           $paysRepository,
        private ManagerRegistry          $doctrine,
        private EventDispatcherInterface $eventDispatcher,
        private string                   $dir,
    ) {}

    /**
     * Inserts a single line of caop data into the database
     *
     * @param array $line Data from caop.csv file due for insertion
     * @param array $groupData Data from Organiz.csv file
     */
    private function persistCaopLine(array $line, array $groupData): void
    {
        $line['made_in'] = str_replace('-', '', $line['made_in']);
        $line['pays'] = str_replace('-', '', $line['pays']);

        $dbCaop = new Caop();
        $dbCaop->setMarque($line['marque'])
            ->setLp($line['lp'])
            ->setSaisVente($line['sais_vente'])
            ->setMagasinPfApresBp($line['magasin_pf_apres_bp'])
            ->setMadeIn($this->paysRepository->findOneBy(['alpha2' => $line['made_in']]))
            ->setPays($this->paysRepository->findOneBy(['alpha2' => $line['pays']]))
            ->setQte((int) $line['qte'])
            ->setBrutDevise((float) str_replace(',', '.', $line['brut_devise']))
            ->setMontantEnDevise((float) str_replace(',', '.', $line['montant_en_devise']))
            ->setDevisePiece($line['devise_piece'])
            ->setMontantEnEuro((float) str_replace(',', '.', $line['montant_en_euro']))
            ->setBrutEuro((float) str_replace(',', '.', $line['brut_euro']))
            ->setDeviseEuro($line['devise_euro'])
            ->setDatePiece(DateTime::createFromFormat('d/m/Y', $line['date_piece'])) // todo check mutable-immutable
            ->setTypeDoc($line['type_doc'])
            ->setNoPiece((int) $line['no_piece'])
            ->setForme($line['forme'])
            ->setModele($line['modele'])
            ->setTpConso($line['tp_conso'])
            ->setLigneExt($line['ligne_ext'])
            ->setPuBrutEur((float) str_replace(',', '.', $line['pu_brut_eur']))
            ->setPuBrutDev((float) str_replace(',', '.', $line['pu_brut_dev']))
        ;

        if (($key = array_search(substr($line['lp'], 0, 3), array_column($groupData, 'ligne'))) !== false) {
            $dbCaop->setGroupe(trim($groupData[$key]['groupe']) !== '' ? $groupData[$key]['groupe'] : null);
        }

        $this->entityManager->persist($dbCaop);
    }

    /**
     * Reads all caop CSV files located in public/uploads/Superset and inserts them in superset DB
     *
     * @return array
     */
    public function importCaopData(): array
    {
        // Defining batch size for SQL transactions
        $batchSize = 200;
        $responseBody = [];
        $responseBody['success'] = true;

        try {
            // Getting all caop (non error) CSV files in directory
            $files = array_filter(scandir($this->dir), function ($file) {
                $file = strtolower($file);
                return str_starts_with($file, 'caop') && !str_contains($file, '.error') && pathinfo($file, PATHINFO_EXTENSION) === 'csv';
            });

            if (empty($files)) {
                throw new Exception("No 'caop.csv' files were found. Please verify the file path and try again.");
            }

            if (!file_exists($this->dir . DIRECTORY_SEPARATOR . 'Organiz.csv')) {
                throw new Exception("No 'Organiz.csv' file was found. Please verify the file path and try again.");
            }

            // Getting group data
            $groupStream = fopen($this->dir . DIRECTORY_SEPARATOR . 'Organiz.csv', 'r');

            $groupHeaders = array_map(function ($headerName) {
                return strtolower($headerName);
            }, fgetcsv($groupStream, 0, ';'));

            $groupsData = [];
            while (($row = fgetcsv($groupStream, 0, ';')) !== false) {
                $groupsData[] = array_combine($groupHeaders, $row);
            }

            fclose($groupStream);

            // Deleting lines after 31/12/2020 before inserting
            $this->caopRepository->deleteAfterDate();

            foreach ($files as $file) {
                $fileStartTime = time();

                $successes = 0;
                $failures = 0;

                $errFile = pathinfo($file, PATHINFO_FILENAME) . '.error' . time() . '.csv';

                $stream = fopen($this->dir . DIRECTORY_SEPARATOR . $file, 'r');
                $errStream = fopen($this->dir . DIRECTORY_SEPARATOR . $errFile, 'w');

                if ($stream && $errStream) {
                    // Getting & formatting CSV headers for SQL insertion
                    $headers = array_map(function ($tempHeader) {
                        return strtolower(preg_replace('/[ .\',-]/', '_', trim($tempHeader)));
                    }, fgetcsv($stream, 0, ';'));

                    // Getting data into an associative array for SQL insertion
                    $caops = [];
                    while (($row = fgetcsv($stream, 0, ';')) !== false) {
                        $caops[] = array_combine($headers, $row);
                    }

                    fclose($stream);

                    // Putting CSV headers in error files, and adding error message
                    fputcsv($errStream, array_merge($headers, ['error_message']), ';');

                    $batch = [];

                    foreach ($caops as $i => $caop) {
                        $batch[] = $caop;

                        if (count($batch) === $batchSize || $i === count($caops) - 1) {
                            try {
                                $this->entityManager->beginTransaction();

                                foreach ($batch as $line) {
                                    $this->persistCaopLine($line, $groupsData);
                                }

                                $this->entityManager->flush();
                                $this->entityManager->commit();
                                $this->entityManager->clear();

                                $successes += count($batch);
                            } catch (Throwable) {
                                // If there's an error in the batch, rollback and inserting line per line
                                $this->entityManager->rollback();

                                foreach ($batch as $line) {
                                    try {
                                        // Resetting EM here if needed because each time we flush an error it will close
                                        if (!$this->entityManager->isOpen()) {
                                            $this->doctrine->resetManager();
                                        }

                                        $this->persistCaopLine($line, $groupsData);
                                        $this->entityManager->flush();
                                        $successes++;
                                    } catch (Throwable $e) {
                                        fputcsv($errStream, array_merge($line, ['error_message' => $e->getMessage()]), ';');
                                        $failures++;
                                    }
                                }
                            }

                            $batch = [];
                        }
                    }
                }

                fclose($errStream);

                $responseBody['files'][$file] = [
                    'successes' => $successes,
                    'failures' => $failures,
                    'time' => time() - $fileStartTime,
                ];

                if ($failures === 0) {
                    unlink($this->dir . DIRECTORY_SEPARATOR . $errFile);
                }

                rename(
                    $this->dir . DIRECTORY_SEPARATOR . $file,
                    $this->dir . '/save/' . pathinfo($file, PATHINFO_FILENAME) . time() . '.csv',
                );
            }

            // Calculating total for display in case there are several caop files to import
            $responseBody['files']['total'] = array_reduce($responseBody['files'], function ($carry, $fileResponseBody) {
                $carry['successes'] += $fileResponseBody['successes'];
                $carry['failures'] += $fileResponseBody['failures'];
                $carry['time'] += $fileResponseBody['time'];

                return $carry;
            }, ['successes' => 0, 'failures' => 0, 'time' => 0]);

            $responseBody['message'] = 'CAOP data imported successfully.';
        } catch (Throwable $e) {
            $responseBody['success'] = false;
            $responseBody['message'] = $e->getMessage();
        }

        // Firing custom event for mail sending
        $this->eventDispatcher->dispatch(new SupersetImportEvent($responseBody, 'caop'), 'superset:caop:import');

        // Returning data for symfony custom command handling
        return $responseBody;
    }
}

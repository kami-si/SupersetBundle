<?php

namespace Hydra\SupersetBundle\Command;

use Hydra\SupersetBundle\Service\FileProcessor;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'superset:caop:import',
    description: 'Import data from caop CSV files in public/uploads/Superset'
)]
final class CaopImportCommand extends Command
{
    private readonly FileProcessor $fileProcessor;

    public function __construct(FileProcessor $fileProcessor)
    {
        $this->fileProcessor = $fileProcessor;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $results = $this->fileProcessor->importCaopData();

        if (!$results['success']) {
            $io->error($results['message']);
            return Command::FAILURE;
        }

        $io->success($results['message']);
        $io->text('Import results: ' . print_r($results['files'], true));

        return Command::SUCCESS;
    }
}

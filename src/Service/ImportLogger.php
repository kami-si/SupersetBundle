<?php

namespace Hydra\SupersetBundle\Service;

use Hydra\SupersetBundle\Entity\Import;

trait ImportLogger
{
    /**
     * Logs the date at which the import took place for the given table
     *
     * @param string $tableName
     * @return void
     */
    protected function logImport(string $tableName): void
    {
        $import = new Import();
        $import->setTable($tableName);

        if (!$this->entityManager->isOpen()) {
            $this->doctrine->resetManager('superset');
        }

        $this->entityManager->persist($import);
        $this->entityManager->flush();
    }
}
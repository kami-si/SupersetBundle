<?php

namespace Hydra\SupersetBundle\MessageHandler;

use Hydra\SupersetBundle\Message\CaopImportMessage;
use Hydra\SupersetBundle\Service\FileProcessor;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final readonly class CaopImportMessageHandler
{
    public function __construct(private FileProcessor $fileProcessor) {}

    public function __invoke(CaopImportMessage $message): void
    {
        $results = $this->fileProcessor->importCaopData(); // todo do something with response
        echo 'Import results: ' . print_r($results['files'], true);
    }
}

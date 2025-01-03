<?php

namespace Hydra\SupersetBundle\MessageHandler;

use Hydra\SupersetBundle\Event\SupersetImportEvent;
use Hydra\SupersetBundle\Message\CaopImportMessage;
use Hydra\SupersetBundle\Service\FileProcessor;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final readonly class CaopImportMessageHandler
{
    public function __construct(
        private FileProcessor            $fileProcessor,
        private EventDispatcherInterface $eventDispatcher,
    ) {}

    public function __invoke(CaopImportMessage $message): void
    {
        $results = $this->fileProcessor->importCaopData();

        $this->eventDispatcher->dispatch(new SupersetImportEvent($results, 'caop'), 'superset:caop:import');
    }
}

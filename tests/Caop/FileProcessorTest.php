<?php

namespace Hydra\SupersetBundle\Tests\Caop;

use Hydra\SupersetBundle\Service\FileProcessor;
use PHPUnit\Framework\TestCase;

final class FileProcessorTest extends TestCase
{
    private FileProcessor $service;

    protected function setUp(): void
    {
        require_once __DIR__ . '/../bootstrap.php';
        $container = $GLOBALS['kernel']->getContainer();

        $this->service = $container->get(FileProcessor::class);
    }

    public function testProcess(): void
    {
        $this->assertInstanceOf(FileProcessor::class, $this->service);
    }
}

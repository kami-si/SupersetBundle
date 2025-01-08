<?php

use Hydra\SupersetBundle\Tests\TestKernel;
use Symfony\Component\Dotenv\Dotenv;

require_once dirname(__DIR__) . '/vendor/autoload.php';

if (file_exists(dirname(__DIR__) . '/.env')) {
    (new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');
}

$kernel = new TestKernel('test', true);
$kernel->boot();

$GLOBALS['kernel'] = $kernel;

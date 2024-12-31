<?php

namespace Hydra\SupersetBundle\Tests;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$kernel = new TestKernel('test', true);
$kernel->boot();

$GLOBALS['kernel'] = $kernel;

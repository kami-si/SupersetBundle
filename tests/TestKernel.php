<?php

namespace Hydra\SupersetBundle\Tests;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Hydra\SupersetBundle\HydraSupersetBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class TestKernel extends Kernel
{
    public function registerBundles(): iterable
    {
        return [
            new FrameworkBundle(),
            new DoctrineBundle(),
            new HydraSupersetBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__ . '/../config/superset.yaml');
    }
}

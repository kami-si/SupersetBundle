<?php

namespace Hydra\SupersetBundle\Tests;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle;
use Exception;
use Hydra\SupersetBundle\HydraSupersetBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\MakerBundle\MakerBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class TestKernel extends Kernel
{
    public function registerBundles(): iterable
    {
        return [
            new FrameworkBundle(),
            new DoctrineBundle(),
            new DoctrineMigrationsBundle(),
            new MakerBundle(),
            new HydraSupersetBundle(),
        ];
    }

    /**
     * @throws Exception
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__ . '/../config/dev-packages/prophet.yaml');
        $loader->load(__DIR__ . '/../config/services.yaml');
        $loader->load(__DIR__ . '/../config/dev-packages/maker.yaml');
        $loader->load(__DIR__ . '/../config/dev-packages/doctrine.yaml');
        $loader->load(__DIR__ . '/../config/dev-packages/doctrine_migrations.yaml');
    }
}

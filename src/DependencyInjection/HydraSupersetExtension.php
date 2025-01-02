<?php

namespace Hydra\SupersetBundle\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class HydraSupersetExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../../config'),
        );

        try {
            $loader->load('superset.yaml');
        } catch (Exception $e) {
            die('Unable to load config file superset.yaml: ' . $e->getMessage());
        }

    }
}

<?php

namespace Hydra\SupersetBundle;

use Hydra\SupersetBundle\DependencyInjection\HydraSupersetExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class HydraSupersetBundle extends AbstractBundle
{
    /**
     * @inheritDoc
     * @return ExtensionInterface|null
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (is_null($this->extension)) {
            $this->extension = new HydraSupersetExtension();
        }

        return $this->extension;
    }
}

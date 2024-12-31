<?php

namespace Hydra\SupersetBundle\Tests;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Prophecy\Prophet;

final class MockCreator
{
    public static function createEntityManagerMock(Prophet $prophet): EntityManagerInterface
    {
        return $prophet->prophesize(EntityManagerInterface::class)->reveal();
    }

    public static function createManagerRegistryMock(Prophet $prophet): ManagerRegistry
    {
        return $prophet->prophesize(ManagerRegistry::class)->reveal();
    }
}

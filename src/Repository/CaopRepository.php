<?php

namespace Hydra\SupersetBundle\Repository;

use Hydra\SupersetBundle\Entity\Caop;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Caop>
 */
class CaopRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Caop::class);
    }

    /**
     * @return int
     */
    public function deleteAfterDate(): int
    {
        $date = DateTime::createFromFormat('d/m/Y', '31/12/2020');

        return $this->createQueryBuilder('c')
            ->delete()
            ->where('c.datePiece > :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->execute();
    }
}

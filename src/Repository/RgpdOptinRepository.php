<?php

namespace App\Repository;

use App\Entity\RgpdOptin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RgpdOptin|null find($id, $lockMode = null, $lockVersion = null)
 * @method RgpdOptin|null findOneBy(array $criteria, array $orderBy = null)
 * @method RgpdOptin[]    findAll()
 * @method RgpdOptin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RgpdOptinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RgpdOptin::class);
    }

    // /**
    //  * @return RgpdOptin[] Returns an array of RgpdOptin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RgpdOptin
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

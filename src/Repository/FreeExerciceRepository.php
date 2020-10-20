<?php

namespace App\Repository;

use App\Entity\FreeExercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FreeExercice|null find($id, $lockMode = null, $lockVersion = null)
 * @method FreeExercice|null findOneBy(array $criteria, array $orderBy = null)
 * @method FreeExercice[]    findAll()
 * @method FreeExercice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FreeExerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FreeExercice::class);
    }

    // /**
    //  * @return FreeExercice[] Returns an array of FreeExercice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FreeExercice
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

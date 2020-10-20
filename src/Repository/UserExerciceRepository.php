<?php

namespace App\Repository;

use App\Entity\UserExercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserExercice|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserExercice|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserExercice[]    findAll()
 * @method UserExercice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserExerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserExercice::class);
    }

    // /**
    //  * @return UserExercice[] Returns an array of UserExercice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserExercice
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

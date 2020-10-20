<?php

namespace App\Repository;

use App\Entity\CourseExercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourseExercice|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseExercice|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseExercice[]    findAll()
 * @method CourseExercice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseExerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourseExercice::class);
    }

    // /**
    //  * @return CourseExercice[] Returns an array of CourseExercice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CourseExercice
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

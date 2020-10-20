<?php

namespace App\Repository;

use App\Entity\CourseFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourseFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseFormation[]    findAll()
 * @method CourseFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourseFormation::class);
    }

    // /**
    //  * @return CourseFormation[] Returns an array of CourseFormation objects
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
    public function findOneBySomeField($value): ?CourseFormation
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

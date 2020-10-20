<?php

namespace App\Repository;

use App\Entity\CourseFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CourseFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourseFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourseFile[]    findAll()
 * @method CourseFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourseFile::class);
    }

    // /**
    //  * @return CourseFile[] Returns an array of CourseFile objects
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
    public function findOneBySomeField($value): ?CourseFile
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

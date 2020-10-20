<?php

namespace App\Repository;

use App\Entity\ExerciceFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExerciceFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExerciceFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExerciceFile[]    findAll()
 * @method ExerciceFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExerciceFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExerciceFile::class);
    }

    // /**
    //  * @return ExerciceFile[] Returns an array of ExerciceFile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExerciceFile
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

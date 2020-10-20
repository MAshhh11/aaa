<?php

namespace App\Repository;

use App\Entity\UserExerciceComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserExerciceComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserExerciceComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserExerciceComment[]    findAll()
 * @method UserExerciceComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserExerciceCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserExerciceComment::class);
    }

    // /**
    //  * @return UserExerciceComment[] Returns an array of UserExerciceComment objects
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
    public function findOneBySomeField($value): ?UserExerciceComment
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

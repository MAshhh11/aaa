<?php

namespace App\Repository;

use App\Entity\DataRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataRole[]    findAll()
 * @method DataRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataRoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataRole::class);
    }

    // /**
    //  * @return DataRole[] Returns an array of DataRole objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DataRole
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

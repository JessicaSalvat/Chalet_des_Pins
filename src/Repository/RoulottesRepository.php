<?php

namespace App\Repository;

use App\Entity\Roulottes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Roulottes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Roulottes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Roulottes[]    findAll()
 * @method Roulottes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoulottesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Roulottes::class);
    }

    // /**
    //  * @return Roulottes[] Returns an array of Roulottes objects
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
    public function findOneBySomeField($value): ?Roulottes
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

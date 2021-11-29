<?php

namespace App\Repository;

use App\Entity\GammeChambre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GammeChambre|null find($id, $lockMode = null, $lockVersion = null)
 * @method GammeChambre|null findOneBy(array $criteria, array $orderBy = null)
 * @method GammeChambre[]    findAll()
 * @method GammeChambre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GammeChambreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GammeChambre::class);
    }

    // /**
    //  * @return GammeChambre[] Returns an array of GammeChambre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GammeChambre
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

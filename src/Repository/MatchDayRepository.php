<?php

namespace App\Repository;

use App\Entity\MatchDay;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MatchDay|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchDay|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchDay[]    findAll()
 * @method MatchDay[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchDayRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MatchDay::class);
    }

//    /**
//     * @return MatchDay[] Returns an array of MatchDay objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MatchDay
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

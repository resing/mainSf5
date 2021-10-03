<?php

namespace App\Repository;

use App\Entity\RatingProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RatingProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method RatingProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method RatingProduct[]    findAll()
 * @method RatingProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RatingProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RatingProduct::class);
    }

    // /**
    //  * @return RatingProduct[] Returns an array of RatingProduct objects
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
    public function findOneBySomeField($value): ?RatingProduct
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

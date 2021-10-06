<?php

namespace App\Repository;

use App\Entity\TrainingAndGraduate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrainingAndGraduate|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingAndGraduate|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingAndGraduate[]    findAll()
 * @method TrainingAndGraduate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingAndGraduateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrainingAndGraduate::class);
    }

    // /**
    //  * @return TrainingAndGraduate[] Returns an array of TrainingAndGraduate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TrainingAndGraduate
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

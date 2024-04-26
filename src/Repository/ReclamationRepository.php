<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

      /**
     * Get reclamations by user ID
     *
     * @param int $userId
     * @return Reclamation[] Returns an array of Reclamation objects
     */
    public function findByUserId(int $userId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.idu = :userId')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getResult();
    }

    public function findAllDistinctWithResponses(): array
    {
        return $this->createQueryBuilder('r')
        ->leftJoin('App\Entity\Reponser', 'reponser', 'WITH', 'reponser.idR = r.idR')
        ->getQuery()
        ->getResult();
    }

    public function findAllDesc(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.idR', 'DESC') 
            ->getQuery()
            ->getResult();
    }
    public function findAllByType(string $type): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.typer = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult();
    }
    public function findByTitle(string $title): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.titrer LIKE :titrer')
            ->setParameter('titrer', '%' . $title . '%') 
            ->getQuery()
            ->getResult();
    }
//    /**
//     * @return Reclamation[] Returns an array of Reclamation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

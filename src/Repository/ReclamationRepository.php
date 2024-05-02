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

    public function findByTitleAndIdu(string $title, int $userId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.titrer LIKE :titrer')
            ->andWhere('r.idu = :userId')
            ->setParameter('titrer', '%' . $title . '%')
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


    public function findReclamationsByDayLast7Days(): array
    {
        $startDate = new \DateTime('-6 days');
        $endDate = new \DateTime('+1 day'); 

        // Generate an array containing all 7 days
        $days = [];
        $currentDate = clone $startDate;
        while ($currentDate <= $endDate) {
            $days[] = $currentDate->format('Y-m-d');
            $currentDate->modify('+1 day');
        }

        // Fetch reclamations count for each day
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery("
            SELECT SUBSTRING(r.temp, 1, 10) AS day, COUNT(r.idR) AS total
            FROM App\Entity\Reclamation r
            WHERE r.temp BETWEEN :start AND :end OR r.temp IS NULL
            GROUP BY day
            ORDER BY day ASC
        ");
        $query->setParameter('start', $startDate->format('Y-m-d'));
        $query->setParameter('end', $endDate->format('Y-m-d'));
        $result = $query->getResult();

        // Initialize totals array with zeros for each day
        $totals = array_fill_keys($days, 0);

        // Populate totals array with counts
        foreach ($result as $row) {
            $totals[$row['day']] = $row['total'];
        }

        return ['days' => array_values($days), 'totals' => array_values($totals)];
    }


    public function getReclamationsCountByType(): array
    {
        // Define types
        $types = [
            'Réclamation Urgente',
            'Bugs ou plantages',
            'Contenu inapproprié',
            'Informations incorrectes',
            'Problèmes de sécurité',
            'Suggestions d amélioration',
            'Problèmes de service client'
        ];

        // Fetch reclamations count for each type
        $qb = $this->createQueryBuilder('r');
        $qb->select('r.typer AS type, COUNT(r.idR) AS total')
            ->where($qb->expr()->in('r.typer', ':types'))
            ->setParameter('types', $types)
            ->groupBy('type');

        $result = $qb->getQuery()->getResult();

        // Initialize totals array with zeros for each type
        $totals = [];

        // Populate totals array with counts
        foreach ($result as $row) {
            $totals[$row['type']] = $row['total'];
        }

        // Fill in zeros for types with no reclamations
        foreach ($types as $type) {
            if (!isset($totals[$type])) {
                $totals[$type] = 0;
            }
        }

        return $totals;
    }

    public function countReclamationsByApropo(): array
{
    // Define the possible values of 'apropo'
    $apropoValues = ['Page', 'Evenement', 'Autre'];

    // Initialize an array to store the counts
    $counts = [];

    // Fetch reclamations count for each 'apropo' value
    $entityManager = $this->getEntityManager();
    foreach ($apropoValues as $apropo) {
        $query = $entityManager->createQuery("
            SELECT COUNT(r) AS count
            FROM App\Entity\Reclamation r
            WHERE r.apropo = :apropo
        ");
        $query->setParameter('apropo', $apropo);
        $result = $query->getSingleScalarResult();

        // Store 'apropo' value and count in an associative array
        $counts[] = ['apropo' => $apropo, 'count' => $result];
    }

    return $counts;
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

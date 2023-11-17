<?php

namespace App\Repository;

use App\Entity\Ad;
use App\Entity\Brand;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ad>
 *
 * @method Ad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ad[]    findAll()
 * @method Ad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ad::class);
    }

//    /**
//     * @return Ad[] Returns an array of Ad objects
//     */
   public function findByFilter($filterPrice, $filterBrand)
   {
    $query = $this->createQueryBuilder('a');
    
    if($filterPrice !== null){
        $query
            ->andWhere('a.price < :max')
            ->setParameter('max', ($filterPrice));
    }

    if($filterBrand != null){
        $query
        ->andWhere('a.brand IN (:brands)')
        ->setParameter(':brands', array_values($filterBrand));
    }

    return $query->getQuery()->getResult();

   }
}

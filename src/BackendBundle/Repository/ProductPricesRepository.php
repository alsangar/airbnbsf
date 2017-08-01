<?php

namespace BackendBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductPricesRepository extends EntityRepository {

    public function getAvailability($pax, $startDate, $endDate) {

        $q = $this->createQueryBuilder("e");
        $q
                ->select('e.price')
                ->join('\BackendBundle\Entity\Products', 'p', 'WITH', 'p = e.product')
                ->where('e.pax = :pax')
                ->andWhere('e.dateFrom <= :startDate')
                ->andWhere('e.dateTo >= :endDate')
                ->setParameter('pax', $pax)
                ->setParameter('startDate', $startDate->format('Y-m-d'))
                ->setParameter('endDate', $endDate->format('Y-m-d'))
                ->groupBy('e.id')
                ->setMaxResults(1)
        ;
//       var_dump($q->getQuery()->getSQL());
//        exit(0);
        $result = $q->getQuery()->getOneOrNullResult();
        return $result;
    }

}

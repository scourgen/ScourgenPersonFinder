<?php

namespace Scourgen\PersonFinderBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 *
 */
class PersonRepository extends EntityRepository
{
    public function findPersonByName($full_name){
        $qb=$this->getEntityManager()
            ->createQueryBuilder()
            ->select('p')
            ->from('ScourgenPersonFinderBundle:Person', 'p')
            ->where('p.full_name like :full_name')
            ->setParameter('full_name', '%'.$full_name.'%');
        return $qb->getQuery()->getResult();
    }
}

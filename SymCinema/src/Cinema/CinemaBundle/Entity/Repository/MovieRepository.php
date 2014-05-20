<?php

namespace Cinema\CinemaBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MovieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MovieRepository extends EntityRepository
{
    public function getAllMovies()
    {
        $qb = $this->createQueryBuilder('b')
                   ->select('b')
                   ->addOrderBy('b.title', 'ASC');

        return $qb->getQuery()
                  ->getResult();
    }
}
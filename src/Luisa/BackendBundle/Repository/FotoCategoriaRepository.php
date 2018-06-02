<?php

namespace Luisa\BackendBundle\Repository;

/**
 * FotoCategoriaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FotoCategoriaRepository extends \Doctrine\ORM\EntityRepository
{
  public function findLatestFoto($limit, $offset = null)
    {
        $qb = $this->createQueryBuilder('f');

        $qb
            ->where('f.active = 1')
            ->orderBy('f.id', 'DESC')
        ;

        if($offset) {
            $qb
                ->setFirstResult($offset)
            ;
        }

        $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }
}

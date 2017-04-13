<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * @return Genus[]
     */
<<<<<<< HEAD
    public function findAllPublishedOrderedByRecentlyActive()
=======
    public function findAllPublishedOrderedBySize()
>>>>>>> 12bcaf10199c7f2ae54abfa802d6a71325454eb9
    {
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
<<<<<<< HEAD
            ->leftJoin('genus.notes', 'genus_note')
            ->orderBy('genus_note.createdAt', 'DESC')
=======
            ->orderBy('genus.speciesCount', 'DESC')
>>>>>>> 12bcaf10199c7f2ae54abfa802d6a71325454eb9
            ->getQuery()
            ->execute();
    }
}

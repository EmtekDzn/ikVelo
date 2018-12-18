<?php

namespace BackOfficeBundle\Repository;

/**
 * DeplacementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DeplacementRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllRest()
    {
        $em = $this->getEntityManager()->createQuery('SELECT d, dj FROM BackOfficeBundle:Deplacement d, BackOfficeBundle:DeplacementJour dj');
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
    public function findByUserIdRest($id)
    {
        $em = $this->getEntityManager()->createQuery('SELECT d, dj FROM BackOfficeBundle:Deplacement d, BackOfficeBundle:DeplacementJour dj, BackOfficeBundle:User u WHERE u.id =' . $id);
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
    public function findByUserYearMonthRest($id, $year, $month)
    {
        $em = $this->getEntityManager()->createQuery('SELECT d, dj FROM BackOfficeBundle:Deplacement d, BackOfficeBundle:DeplacementJour dj, BackOfficeBundle:User u WHERE u.id =' . $id . ' AND d.annee = ' . $year . ' AND d.mois = ' . $month);
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
}
<?php

namespace BackOfficeBundle\Entity;

/**
 * DeplacementRepository
 * These functions are used in WebServiceBundle.
 */
class DeplacementRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllRest()
    {
        $em = $this->getEntityManager()->createQuery('SELECT d FROM BackOfficeBundle:Deplacement d'); //Select all Deplacements
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
    public function findByUserIdRest($id)
    {
        $em = $this->getEntityManager()->createQuery(
            'SELECT d FROM BackOfficeBundle:Deplacement d, BackOfficeBundle:User u
            WHERE d.user =' . $id); //Select Deplacements associated with the userId
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
    public function findByUserYearMonthRest($id, $year, $month)
    {
        $em = $this->getEntityManager()->createQuery(
            'SELECT d FROM BackOfficeBundle:Deplacement d, BackOfficeBundle:User u 
            WHERE u.id =' . $id . ' AND d.annee = ' . $year . ' AND d.mois = ' . $month);
             //Select Deplacements associated with the userId, year, and month
        return $em->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }
}
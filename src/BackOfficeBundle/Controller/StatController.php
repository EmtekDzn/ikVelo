<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Stats controller.
 *
 * @Route("stats")
 */
class StatController extends Controller
{
    /**
     * Stats index
     *
     * @Route("/", name="stats_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $usersPerCity = $em->createQuery(
            "SELECT t2.ville ,COUNT(t1.ville)
            AS Nombre_d_utilisateurs
            FROM BackOfficeBundle:User t1
            INNER JOIN BackOfficeBundle:Ville t2
            WHERE t1.ville = t2.id
            GROUP BY t2.ville"
        )->getResult();

        $kmAndUsersPerSociety = $em->createQuery(
            "SELECT s.societe, COUNT(u.societe) AS Nombre_d_utilisateurs, SUM(dj.nbKm) AS Total_km
            FROM BackOfficeBundle:Societe s, BackOfficeBundle:User u, BackOfficeBundle:Deplacement d, BackOfficeBundle:DeplacementJour dj
            WHERE s.id = u.societe 
            AND u.id = d.user
            AND d.id = dj.deplacement
            GROUP BY s.societe"
        )->getResult();

    
        return $this->render('BackOfficeBundle:Stat:index.html.twig', array(
            'usersPerCity' => $usersPerCity,
            'kmAndUsersPerSociety' => $kmAndUsersPerSociety,
        ));
    }
}

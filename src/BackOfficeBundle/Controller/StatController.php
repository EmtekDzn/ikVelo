<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;

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
        
        $months = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        $societes = $em->getRepository('BackOfficeBundle:Societe')->findAll();
        $societesArray = array();
        $tabfinal = array();

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

        $kmPerMonthPerUserPerSociety = $em->createQuery(
            "SELECT s.societe, d.mois, u.nom, SUM(dj.nbKm) AS Total_km
            FROM BackOfficeBundle:Societe s, BackOfficeBundle:User u, BackOfficeBundle:Deplacement d, BackOfficeBundle:DeplacementJour dj
            WHERE s.id = u.societe
            AND u.id = d.user
            AND d.id = dj.deplacement
            AND d.annee = 2018
            GROUP BY s.societe, d.mois, u.id"
        )->getResult();

        foreach ($kmPerMonthPerUserPerSociety as $key => $value) {  
            for ($i=1 ; $i < sizeof($months)+1 ; $i++) {
                $tabfinal[$value["societe"]][$i] = array();
            }
        }
        
        foreach ($kmPerMonthPerUserPerSociety as $key => $value) {  
            $tabfinal[$value["societe"]][$value["mois"]][$value["nom"]] = $value["Total_km"];
        }

        foreach ($societes as $key => $value) {
            array_push($societesArray, $value->getSociete());
        }

        return $this->render('BackOfficeBundle:Stat:index.html.twig', array(
            'usersPerCity' => $usersPerCity,
            'kmAndUsersPerSociety' => $kmAndUsersPerSociety,
            'kmPerMonthPerUserPerSociety' => $tabfinal,
            'months' => $months
        ));
    }
}

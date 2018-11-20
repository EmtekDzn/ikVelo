<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("deplacementsjour")
 */
class DeplacementJourController extends Controller
{
    /**
     * @Route("/list/{deplacementId}", name="front_deplacement_jour_list")
     */
    public function listAction($deplacementId)
    {   
        
        $deplacement = $this->getDoctrine()->getRepository('FrontOfficeBundle:Deplacement')->find($deplacementId);
        $deplacements = $this->getDoctrine()->getRepository('FrontOfficeBundle:DeplacementJour')->findBy(array('deplacement' => $deplacement));
        return $this->render('FrontOfficeBundle:DeplacementJour:list.html.twig', array(
            'deplacement' => $deplacement,
            'deplacementJours' => $deplacements,
        ));
    }

    /**
     * @Route("/edit/{deplacementId}", name="front_deplacement_jour_edit")
     */
    public function editAction(Request $request)
    {
        return $this->render('index.html.twig');
    }

}

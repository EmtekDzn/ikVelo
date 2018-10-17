<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DeplacementController extends Controller
{
    /**
     * @Route("/list/{userId}")
     */
    public function listAction($userId = 2)
    {
        // $user = $this->getDoctrine()->getRepository('FrontOfficeBundle:User')->find($userId);
        $deplacements = $this->getDoctrine()->getRepository('FrontOfficeBundle:User')->findBy(array('user_id_DANSLABDD' => $userId));
        return $this->render('FrontOfficeBundle:DeplacementController:list.html.twig', array(
            'deplacements' => $deplacements
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('FrontOfficeBundle:DeplacementController:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit/{id}")
     */
    public function editAction($id)
    {
        return $this->render('FrontOfficeBundle:DeplacementController:edit.html.twig', array(
            // ...
        ));
    }

}

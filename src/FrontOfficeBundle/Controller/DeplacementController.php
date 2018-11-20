<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Entity\Deplacement;

class DeplacementController extends Controller
{
    /**
     * @Route("/list/{userId}", name="front_deplacements_list")
     */
    public function listAction($userId = 2)
    {
        $user = $this->getDoctrine()->getRepository('FrontOfficeBundle:User')->find($userId);
        $deplacements = $this->getDoctrine()->getRepository('FrontOfficeBundle:Deplacement')->findBy(array('user' => $user));
        return $this->render('FrontOfficeBundle:DeplacementController:list.html.twig', array(
            'deplacements' => $deplacements
        ));
    }

    /**
     * @Route("/create/{userId}")
     */
    public function createAction(Request $request, $userId = 2)
    {   
        $deplacement = new Deplacement();
        $form = $this->createForm('FrontOfficeBundle\Form\DeplacementType', $deplacement);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getDoctrine()->getRepository('FrontOfficeBundle:User')->find($userId);
            $deplacement->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacement);
            $em->flush();

            return $this->redirectToRoute('front_deplacements_list');
        }

        return $this->render('FrontOfficeBundle:DeplacementController:create.html.twig', array('form' => $createForm->createView()));
    }

    /**
     * @Route("/edit/{id}", name="front_deplacement_edit")
     */
    public function editAction($id)
    {
        return $this->render('FrontOfficeBundle:DeplacementController:edit.html.twig', array(

        ));
    }

}

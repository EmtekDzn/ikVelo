<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Entity\DeplacementJour;

/**
 * @Route("deplacementsjour")
 */
class DeplacementJourController extends Controller
{
    /**
     * @Route("/list/{id}", name="front_deplacement_jour_list")
     */
    public function listAction($id)
    {   
        
        $deplacement = $this->getDoctrine()->getRepository('FrontOfficeBundle:Deplacement')->find($id);
        $deplacementsJours = $this->getDoctrine()->getRepository('FrontOfficeBundle:DeplacementJour')->findBy(array('deplacement' => $deplacement));
        return $this->render('FrontOfficeBundle:DeplacementJour:list.html.twig', array(
            'deplacement' => $deplacement,
            'deplacementJours' => $deplacementsJours,
        ));
    }

    /**
     * @Route("/create/{id}", name="front_deplacement_jour_create")
     */
    public function createAction(Request $request, $id)
    {
        $deplacementJour = new DeplacementJour();
        $form = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $deplacement = $this->getDoctrine()->getRepository('FrontOfficeBundle:Deplacement')->find($id);
            $deplacementJour->setDeplacement($deplacement);

            $date = new \DateTime();
            $date->setTimestamp(time());
            
            $deplacementJour->setUpdated($date);
            $deplacement->setUpdated($date);

            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacementJour);
            $em->flush();

            return $this->redirectToRoute('front_deplacement_jour_list', array('id' => $deplacement->getId()));
        }

        return $this->render('FrontOfficeBundle:DeplacementJour:create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/edit/{id}", name="front_deplacement_jour_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DeplacementJour $deplacementJour)
    {
        $editForm = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $editForm->handleRequest($request);


        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $deplacementJour->setUpdated(time());
            $deplacementJour->getDeplacement()->setUpdated(time());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('front_deplacement_jour_list', array('id' => $deplacementJour->getDeplacement()->getId()));
        }

        return $this->render('FrontOfficeBundle:DeplacementJour:edit.html.twig', array(
            'form' => $editForm->createView(),
        ));
    }

}

<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\DeplacementJour;

/**
 * @Route("deplacementsjour")
 */
class DeplacementJourController extends Controller
{
    /**
     * @Route("/list/{id}", name="front_deplacement_jour_list")
     * Renders a list of all of the user's DeplacementJours
     */
    public function listAction($id)
    {   
        
        $deplacement = $this->getDoctrine()->getRepository('BackOfficeBundle:Deplacement')->find($id);
        $deplacementsJours = $this->getDoctrine()->getRepository('BackOfficeBundle:DeplacementJour')->findBy(array('deplacement' => $deplacement));
        return $this->render('FrontOfficeBundle:DeplacementJour:list.html.twig', array(
            'deplacement' => $deplacement,
            'deplacementJours' => $deplacementsJours,
        ));
    }

    /**
     * @Route("/create/{id}", name="front_deplacement_jour_create")
     * Handles the creation of a new DeplacementJour for the user
     */
    public function createAction(Request $request, $id)
    {
        $deplacementJour = new DeplacementJour();
        $form = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $deplacement = $this->getDoctrine()->getRepository('BackOfficeBundle:Deplacement')->find($id);//Find the Deplacement to associate the DeplacementJour with
            $deplacementJour->setDeplacement($deplacement);//Associate the user with the DeplacementJour

            $date = new \DateTime();
            $date->setTimestamp(time());
            
            $deplacementJour->setUpdated($date);//Set last update of DeplacementJour as its creation
            $deplacement->setUpdated($date);//The Deplacement has also been updated

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
     * Handles the edition of a Deplacement for the user
     */
    public function editAction(Request $request, DeplacementJour $deplacementJour)
    {
        if ($deplacementJour->getDeplacement()->getValidation()) {//If the Deplacement is validated, it is uneditable
            return $this->redirectToRoute('front_deplacement_jour_list', array('id' => $deplacementJour->getDeplacement()->getId()));
                //Go back to the list
        }
        $editForm = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $editForm->handleRequest($request);


        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $deplacementJour->setUpdated(time());//Set the DeplacementJour's last update as now
            $deplacementJour->getDeplacement()->setUpdated(time());//Set the Deplacement's last update as now
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('front_deplacement_jour_list', array('id' => $deplacementJour->getDeplacement()->getId()));
        }

        return $this->render('FrontOfficeBundle:DeplacementJour:edit.html.twig', array(
            'form' => $editForm->createView(),
        ));
    }

}

<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Deplacement;

/**
 * @Route("deplacements")
 */
class DeplacementController extends Controller
{
    /**
     * @Route("/list/{id}", name="front_deplacements_list")
     * Renders a list of all of the user's Deplacements
     */
    public function listAction($id)
    {
        $user = $this->getDoctrine()->getRepository('BackOfficeBundle:User')->find($id);
        $deplacements = $this->getDoctrine()->getRepository('BackOfficeBundle:Deplacement')->findBy(array('user' => $user));
        return $this->render('FrontOfficeBundle:Deplacement:list.html.twig', array(
            'deplacements' => $deplacements
        ));
    }

    /**
     * @Route("/create/{id}", name="front_deplacements_create")
     * Handles the creation of a new Deplacement for the user
     */
    public function createAction(Request $request, $id)
    {   
        $deplacement = new Deplacement();
        $form = $this->createForm('FrontOfficeBundle\Form\DeplacementType', $deplacement);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getDoctrine()->getRepository('BackOfficeBundle:User')->find($id);//Find the user to associate the Deplacement with
            $deplacement->setUser($user);//Associate the user with the Deplacement

            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacement);
            $deplacement->setUpdated($deplacement->getCreated());//Set last update of Deplacement as its creation
            $em->flush();

            return $this->redirectToRoute('front_deplacements_list', array('id' => $user->getId()));
        }

        return $this->render('FrontOfficeBundle:Deplacement:create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/edit/{id}", name="front_deplacement_edit")
     * @Method({"GET", "POST"})
     * Handles the edition of a Deplacement for the user
     */
    public function editAction(Request $request, Deplacement $deplacement)
    {
        if ($deplacement->getValidation()) {//If the Deplacement is validated, it is uneditable
            return $this->redirectToRoute('front_deplacements_list', array('id' => $deplacement->getUser()->getId()));
                //Go back to the list
        }
        $form = $this->createForm('FrontOfficeBundle\Form\DeplacementType', $deplacement);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $deplacement->setUpdated(time());//Set the Deplacement's last update as now
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('front_deplacements_list', array('id' => $deplacement->getUser()->getId()));
        }

        return $this->render('FrontOfficeBundle:Deplacement:edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}

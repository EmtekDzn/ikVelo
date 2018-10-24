<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DeplacementController extends Controller
{
    /**
     * @Route("/list/{userId}", name="deplacements_list")
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
        $createForm = $this->createForm('BackOfficeBundle\Form\DeplacementType');
        $createForm->handleRequest($request);


        if ($createForm->isSubmitted() && $createForm->isValid()) {
            $user = $this->getDoctrine()->getRepository(User::class)->find($userId);
            $deplacement->setUser1($user);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('deplacements_list');
        }

        return $this->render('FrontOfficeBundle:DeplacementController:create.html.twig', array('form' => $createForm->createView()));
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

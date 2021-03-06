<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Deplacement;
use BackOfficeBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Deplacement controller.
 *
 * @Route("deplacements")
 */
class DeplacementController extends Controller
{
    /**
     * Lists all deplacement entities.
     *
     * @Route("/", name="deplacements_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findAll();

        return $this->render('BackOfficeBundle:Deplacement:index.html.twig', array(
            'deplacements' => $deplacements,
        ));
    }

    /**
     * Finds and displays a deplacement entity.
     *
     * @Route("/{id}", name="deplacements_show")
     * @Method("GET")
     */
    public function showAction(Deplacement $deplacement)
    {

        return $this->render('BackOfficeBundle:Deplacement:show.html.twig', array(
            'deplacement' => $deplacement,
        ));
    }

    /**
     * Displays a form to edit an existing deplacement entity.
     *
     * @Route("/{id}/edit", name="deplacements_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Deplacement $deplacement)
    {
        $editForm = $this->createForm('BackOfficeBundle\Form\DeplacementType', $deplacement);
        $editForm->handleRequest($request);

        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $admin = $this->getDoctrine()->getRepository(User::class)->find(1);
            $deplacement->setUser1($admin);
            
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('deplacements_edit', array('id' => $deplacement->getId()));
        }

        return $this->render('BackOfficeBundle:Deplacement:edit.html.twig', array(
            'deplacement' => $deplacement,
            'edit_form' => $editForm->createView(),
        ));
    }
}

<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/{id}/profil/edit", name="front_profil_edit")
     * @Method({"GET", "POST"})
     * Handles the edition of the user's profile
     */
    public function editAction(Request $request, $id)
    {
        $user = $this->getDoctrine()->getRepository('BackOfficeBundle:User')->find($id);
        $editForm = $this->createForm('FrontOfficeBundle\Form\UserType', $user);
        $editForm->handleRequest($request);


        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $user->setUpdated(time());//Set the last update as now
            return $this->redirectToRoute('front_landing');
        }

        return $this->render('FrontOfficeBundle:User:edit.html.twig', array(
            'form' => $editForm->createView(),
        ));
    }

}

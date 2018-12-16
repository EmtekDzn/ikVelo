<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackOfficeBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }

    /**
     * @Route("/", name="front_landing")
     */
    public function landingAction($id = 2)
    {
        if (is_numeric($id)) {
            $user = $this->getDoctrine()->getRepository('BackOfficeBundle:User')->find($id);

            
            return $this->render('FrontOfficeBundle:User:landing.html.twig', array(
                'user' => $user
            ));
        } else {
            throw new BadRequestHttpException('Invalid URL', null, 400);
        }
    }
}

<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/none")
     */
    public function indexAction()
    {
        return $this->render('WebServiceBundle:Default:index.html.twig');
    }
}

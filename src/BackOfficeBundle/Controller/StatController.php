<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Stats controller.
 *
 * @Route("stat")
 */
class StatController extends Controller
{
    /**
     * Stats index
     *
     * @Route("/", name="stats_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Stat:index.html.twig', array(

        ));
    }
}

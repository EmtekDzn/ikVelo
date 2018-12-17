<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeplacementController extends Controller
{
    /**
     * @Route("/")
     */
    public function allAction()
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findAllRest();
        return new JsonResponse($deplacements);
    }

    /**
     * @Route("/byUser/{id}")
     */
    public function byUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findByUserIdRest($id);
        return new JsonResponse($deplacements);
    }

    /**
     * @Route("/byUserYearMonth/{id}/{year}/{month}")
     */
    public function byUserYearMonthAction($id, $year, $month)
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findByUserYearMonthRest($id, $year, $month);
        return new JsonResponse($deplacements);
    }

}

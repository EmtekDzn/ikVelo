<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeplacementController extends Controller
{
    /**
     * @Route("/")
     * Returns a jsonresponse of all Deplacements
     */
    public function allAction()
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findAllRest();
        $response = new Response(
            json_encode($deplacements),
            Response::HTTP_OK,
            array('Content-Type' => 'application/json', 'Access-Control-Allow-Origin' => '*')
        );
        return $response;
    }

    /**
     * @Route("/byUser/{id}")
     * Returns a jsonresponse of all Deplacements of a user
     */
    public function byUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findByUserIdRest($id);
        $response = new Response(
            json_encode($deplacements),
            Response::HTTP_OK,
            array('Content-Type' => 'application/json', 'Access-Control-Allow-Origin' => '*')
        );
        return $response;
    }

    /**
     * @Route("/byUserYearMonth/{id}/{year}/{month}")
     * Returns a jsonresponse of all Deplacements of a user from a specific month and year
     */
    public function byUserYearMonthAction($id, $year, $month)
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findByUserYearMonthRest($id, $year, $month);
        $response = new Response(
            json_encode($deplacements),
            Response::HTTP_OK,
            array('Content-Type' => 'application/json', 'Access-Control-Allow-Origin' => '*')
        );
        return $response;
    }

}

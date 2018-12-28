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
     */
    public function allAction()
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findAllRest();
        header("Access-Control-Allow-Origin: *");
        // header("Content­-Type: application/json");
        $response = new Response(
            json_encode($deplacements),
            Response::HTTP_OK,
            array('Content­-Type' => 'application/json', 'Access­-Control-­Allow-­Origin' => '*')
            // array()
        );
        // $response->headers->set('Access­-Control-­Allow-­Origin', '*');
        // $response->headers->set('Content-Type', 'application/json');
        // $response = new JsonResponse(json_encode($deplacements));
        // dump($response); 
        return $response;
    }

    /**
     * @Route("/byUser/{id}")
     */
    public function byUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findByUserIdRest($id);
        header("Access-Control-Allow-Origin: *");
        $response = new Response(
            json_encode($deplacements),
            Response::HTTP_OK,
            array('Content­-Type' => 'application/json', 'Access­-Control-­Allow-­Origin' => '*')
        );
        // dump($response);
        return $response;
    }

    /**
     * @Route("/byUserYearMonth/{id}/{year}/{month}")
     */
    public function byUserYearMonthAction($id, $year, $month)
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findByUserYearMonthRest($id, $year, $month);
        header("Access-Control-Allow-Origin: *");
        $response = new Response(
            json_encode($deplacements),
            Response::HTTP_OK,
            array('Content­-Type' => 'application/json', 'Access­-Control-­Allow-­Origin' => '*')
        );
        return $response;
    }

}

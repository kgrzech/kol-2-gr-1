<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyAntybioticController extends Controller
{

    /**
     * @Route("/antybiotics.html", name="antybiotics")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Antybiotic')->findAll();

        return $this->render(
            'default/antybiotics.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

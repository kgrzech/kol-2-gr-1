<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyLambController extends Controller
{

    /**
     * @Route("/lamb.html", name="lamb")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Lamb')->findAll();

        return $this->render(
            'default/lamb.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
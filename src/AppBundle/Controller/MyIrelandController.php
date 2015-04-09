<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
 
    /**
     * @Route("/ireland.html", name="ireland")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Ireland')->findAll();
        return $this->render(
            'default/ireland.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

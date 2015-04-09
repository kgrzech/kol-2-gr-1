<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCliffController extends Controller
{

    /**
     * @Route("/cliffs.html", name="cliffs")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Cliff')->findAll();

        return $this->render(
            'default/cliffs.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

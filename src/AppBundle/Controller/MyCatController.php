<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCatController extends Controller
{

    /**
     * @Route("/cat.html", name="cat")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Cat')->findAll();

        return $this->render(
            'default/cat.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
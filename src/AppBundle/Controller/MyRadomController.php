<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyRadomController extends Controller
{

    /**
     * @Route("/radom.html", name="radom")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Radom')->findAll();

        return $this->render(
            'default/radom.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

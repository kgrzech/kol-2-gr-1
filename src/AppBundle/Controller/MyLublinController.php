<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyLublinController extends Controller
{

    /**
     * @Route("/lublin.html", name="lublin")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Lublin')->findAll();

        return $this->render(
            'default/lublin.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}

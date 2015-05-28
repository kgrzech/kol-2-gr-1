<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MyCarsController extends Controller
{
    /**
     * @Route("/cars.html", name="cars")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Cars')->findAll();
        return $this->render(
            'default/cars.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }
}
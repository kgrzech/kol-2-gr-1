<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MyPhoneController extends Controller
{
    /**
     * @Route("/phone.html", name="phone")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Phone')->findAll();
        return $this->render(
            'default/phone.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }
}
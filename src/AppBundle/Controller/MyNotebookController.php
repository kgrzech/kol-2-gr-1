<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MyNotebookController extends Controller
{
    /**
     * @Route("/notebooks.html", name="notebooks")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:Notebook')->findAll();
        return $this->render(
            'default/notebooks.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }
}
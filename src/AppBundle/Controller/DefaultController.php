<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Provincia;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
     /**
     * @Route("/app/hello", name="saluto")
     */
    public function helloAction()
    {
    //return new Response('<html><body>HELLO MY DEAR!</body></html>');
    
     return $this->render(
            'AppBundle:Default:simplelayout.html.twig',
            array('number' => 10));
    
    }
    
    /**
     * @Route("/app/colore", name="colore")
     */
    public function coloreAction()
    {
    return new Response('<html><body>COLORE ROSSO!</body></html>');
    }
    
    /**
     * @Route("/form/provincia", name="provincia")
     */
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $provincia = new Provincia();
        $provincia->setNome('Pistoia');

        $form = $this->createFormBuilder($provincia)
            ->add('Nome', 'text')
            ->add('save', 'submit', array('label' => 'Crea Provincia'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    
}

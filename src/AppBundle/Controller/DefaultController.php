<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackendBundle\Form\SearchType;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $rooms_repo = $em->getRepository('BackendBundle:Products');
        $rooms = $rooms_repo->findIndexRoom('es', '4');

        //Llamada al form type
        $form = $this->createForm(SearchType::class);

        return $this->render('app/default/index.html.twig', array(
                    'rooms' => $rooms,
                    'form' => $form->createView()
        ));
    }
    
    /**
     * @Route("/adminPanel", name="admin_panel")
     */
    public function adminAction(Request $request) {

        return $this->render('app/default/adminPanel/', array());
    }

}

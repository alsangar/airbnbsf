<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BackendBundle\Form\SearchType;

class RoomsController extends Controller {

    /**
     * @Route("/rooms/list", name="rooms_list")
     */
    public function roomsListAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $rooms_repo = $em->getRepository('BackendBundle:Products');        

        //Llamada al form type
        $form = $this->createForm(SearchType::class);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $rooms = $rooms_repo->findIndexRoom('es', null, $form['city']->getData());
        }else{
            $rooms = $rooms_repo->findIndexRoom('es');
        }


        return $this->render('app\rooms\list.html.twig', array(
                    'rooms' => $rooms,
                    'form' => $form,
        ));
    }

    /**
     * @Route("/rooms/myrooms", name="rooms_my")
     */
    public function roomsMyAction(Request $request) {
        $room = 'Esta es mi habitación.';
        return $this->render('app\rooms\view.html.twig', array(
                    'room' => $room
        ));
    }

    /**
     * @Route("/rooms/myrooms/{id}", name="rooms_my_edit", requirements={"id" = "\d+"})
     */
    public function roomsEditAction(Request $request, $id) {
        $room = 'Estas editando myrooms ' . $id;
        return $this->render('app\rooms\edit.html.twig', array(
                    'room' => $room
        ));
    }

    /**
     * @Route("/rooms/{name}", name="rooms_view")
     */
    public function roomsViewAction(Request $request, $name) {
        $em = $this->getDoctrine()->getManager();
        $rooms_repo = $em->getRepository('BackendBundle:Products');
        
        $room = $rooms_repo->findOneByTitle($name);
        return $this->render('app\rooms\view.html.twig', array(
                    'room' => $room
        ));
    }

}

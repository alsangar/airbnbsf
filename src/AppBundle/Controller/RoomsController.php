<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BackendBundle\Form\SearchType;
use BackendBundle\Entity\City;
use BackendBundle\Entity\Product;
use BackendBundle\Entity\Bookings;
use BackendBundle\Form\BookingsType;

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
        } else {
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
//        $room = $rooms_repo->findOneRoom($name, 'ES');
//        if (is_empty(room())) {
//            $this->redirect('homepage');
//        }
//
//        $room = $description = $location = null;
//        $feauters = [];
//
//        foreach ($room as $key) {
//            foreach ($key as $entity => $value) {
//                if ($entity == 'features') {
//                    $feautres [] = $value;
//                } elseif ($entity == 'room') {
//                    $room = $value;
//                } elseif ($entity == 'description') {
//                    $description = $value;
//                } elseif ($entity == 'location') {
//                    $location = $value;
//                }
//            }
//        }

        $room_city = $rooms_repo->findOthersRoomsByCityContext('es', null, $room->getLocation()->getCity(), $room->getTitle());

        $booking = new Bookings();
        $form = $this->createForm(BookingsType::class, $booking);

        return $this->render('app\rooms\view.html.twig', array(
                    'room' => $room,
//                    'description' => $description,
//                    'location' => $location,
//                    'features' => $features,
                    'room_city' => $room_city,
                    'form' => $form->createView(),
        ));
    }


}

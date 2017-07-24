<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class RoomsController extends Controller
{
    
    /**
     * @Route("/rooms/list", name="rooms_list")
     */
    public function roomsListAction(Request $request)
    {
        $rooms = ['1','2','3'];
        return $this->render('app\rooms\list.html.twig', array(
            'rooms' => $rooms
        ));
    }
    
    /**
     * @Route("/rooms/myrooms", name="rooms_my")
     */
    public function roomsMyAction(Request $request)
    {
        $room = 'Esta es mi habitación.';
        return $this->render('app\rooms\view.html.twig', array(
            'room' => $room
        ));
    }
    
        /**
     * @Route("/rooms/myrooms/{id}", name="rooms_my_edit", requirements={"id" = "\d+"})
     */
    public function roomsEditAction(Request $request, $id)
        {
        $room = 'Estas editando myrooms ' . $id;
        return $this->render('app\rooms\edit.html.twig', array(
            'room' => $room
        ));
    }
    
    /**
     * @Route("/rooms/{name}", name="rooms_view")
     */
    public function roomsViewAction(Request $request)
    {
        $room = '';
        return $this->render('app\rooms\view.html.twig', array(
            'room' => $room
        ));
    }
}

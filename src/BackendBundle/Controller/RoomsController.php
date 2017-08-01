<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Respond;
use Symfony\Component\HttpFoundation\JsonResponse;

class RoomsController extends Controller {

    function calculatePriceAction(Request $request) {
        $aux = $request->request->get('checkin');
        $checkin = date_create_from_format('d-m-Y', $aux);
        $aux = $request->request->get('checkout');
        $checkout = date_create_from_format('d-m-Y', $aux);
        $pax = $request->request->get('pax');

        $nights = $checkout->diff($checkin)->format('%a');

        $em = $this->getDoctrine()->getManager();
        $priceRepo = $em->getRepository('BackendBundle:ProductPrices');
        $nightPrice = $priceRepo->getAvailability($pax, $checkin, $checkout);

        $total = 0;
        if ($nightPrice) {
            $total = (double)$nightPrice['price'] * $nights;
        }

        $response = new JsonResponse();
        $response->setData(array(
            'pax' => $pax,
            'checkin' => $checkin,
            'checkout' => $checkout,
            'nights' => $nights,
            'nightPrice' => $nightPrice,
            'total' => $total,
        ));

        return $response;
    }

}

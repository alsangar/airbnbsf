<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace BackendBundle\EventListener;

use Vich\UploaderBundle\Event\Event;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

/**
 * Description of ComprobarDimensionesDeImagen
 *
 * @author alberto
 */
class ComprobarDimensionesDeImagen
{

    private $requestStack;
    private $router;

    public function __construct(RequestStack $requestStack, RouterInterface $router)
    {
        $this->requestStack = $requestStack;
        $this->router = $router;
    }

    public function onVichUploaderPreUpload(Event $event)
    {
        $object = $event->getObject();
        $mapping = $event->getMapping();

        $imagen = getimagesize($object->getImageFile());

        if (250 > $imagen[0] || 250 > imagen[1]) {
            $request = $this->requestStack->getCurrentRequest();
            $session = $request->getSession();

            $event->stopPropagation();
            $session->getFlashBag()->add('error', "Dimensiones de imagen demasiado pequeñas. Dimensiones mínimas: 250x250 \n");
            
            $url = $this->router->generate('fos_user_profile_edit');
            /*
             * Testing different methods of redirect
             * 
             * $response = new RedirectResponse($url);
             * $event->setResponse($response);
             */
            
            $event->setController(function() use ($request) {
                return new RedirectResponse($url);
            });            
        }
    }
}

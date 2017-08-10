<?php
namespace BackendBundle\EventListener;

/**
 * Description of RedireccionTrasRegistrarUsuario
 *
 * @author alsanchez
 */
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

/**
 * @Route(service="app.redireccion_tras_registrar_usuario") 
 */
class RedireccionTrasRegistrarUsuario implements EventSubscriberInterface
{

    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onRegistrationSuccess(FormEvent $event)
    {
        $url = $this->router->generate('homepage');
        $response = new RedirectResponse($url);

        /* $
         * El metodo this->redirectToRoute('homepage'); sería un atajo
         * que equivale a las dos lineas anteriores.
         * 
         */

        $event->setResponse($response);
    }

    public static function getSubscribedEvents()
    {

        return [
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        ];
    }
}

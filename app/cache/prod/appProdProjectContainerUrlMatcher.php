<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/rooms')) {
            // rooms_list
            if ($pathinfo === '/rooms/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsListAction',  '_route' => 'rooms_list',);
            }

            if (0 === strpos($pathinfo, '/rooms/myrooms')) {
                // rooms_my
                if ($pathinfo === '/rooms/myrooms') {
                    return array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsMyAction',  '_route' => 'rooms_my',);
                }

                // rooms_my_edit
                if (preg_match('#^/rooms/myrooms/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rooms_my_edit')), array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsEditAction',));
                }

            }

            // rooms_view
            if (preg_match('#^/rooms/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rooms_view')), array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsViewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_view')), array (  '_controller' => 'AppBundle\\Controller\\UserController::userViewAction',));
            }

            // user_profile
            if ($pathinfo === '/user/profile') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::userProfileAction',  '_route' => 'user_profile',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'register',);
        }

        // inbox
        if ($pathinfo === '/inbox') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::inboxAction',  '_route' => 'inbox',);
        }

        if (0 === strpos($pathinfo, '/back')) {
            // backend_homepage
            if (rtrim($pathinfo, '/') === '/back') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_homepage');
                }

                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_homepage',);
            }

            // backend_user_list
            if ($pathinfo === '/back/user/list') {
                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_user_list',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

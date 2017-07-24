<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    
    /**
     * @Route("/user/view/{username}", name="user_view")
     */
    public function userViewAction(Request $request)
    {
        $users  = ['pepe', 'paco','juan'];
        return $this->render('user/view.html.twig', array(
            'users' => $users
        ));
    }
    
    /**
     * @Route("/user/profile", name="user_profile")
     */
    public function userProfileAction(Request $request)
    {
        $user ='';
        return $this->render('user/profile.html.twig', array(
            'user' => $user
        ));
    }
    
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        return $this->render('user/login.html.twig', array(
        ));
    }    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        return $this->render('user/register.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }    /**
     * @Route("/inbox", name="inbox")
     */
    public function inboxAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('user/inbox.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
}

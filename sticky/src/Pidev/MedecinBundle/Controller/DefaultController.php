<?php

namespace Pidev\MedecinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevMedecinBundle:Default:contact.html.twig', array('name' => $name));
    }
}

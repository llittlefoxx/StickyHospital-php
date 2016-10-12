<?php

namespace Backend\MedecinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendMedecinBundle:Default:index.html.twig');
    }
}

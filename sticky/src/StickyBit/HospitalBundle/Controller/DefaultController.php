<?php

namespace StickyBit\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StickyBitHospitalBundle:Default:index.html.twig');
    }
}

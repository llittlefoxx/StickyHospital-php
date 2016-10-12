<?php

namespace StickyBit\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MedecinController extends Controller
{
    public function listmedecinAction(){
    $em = $this->container->get('doctrine')->getEntityManager();
        $Request = $this->getRequest();
     if ($Request->getMethod() == 'POST') {
        $id= $Request->get('ser'); 
        $medecin = $em->getRepository('StickyBitHospitalBundle:medecin')->findBy(array('idService'=>$id));
        return $this->render('StickyBitHospitalBundle:medecin:listmedecinbyservice.html.twig', array('listamed' => $medecin));
        }}


       

       }

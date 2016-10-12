<?php

namespace StickyBit\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class serviceController extends Controller
{
    
     public function listserviceAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $emmed = $this->container->get('doctrine')->getEntityManager();
        $service = $em->getRepository('StickyBitHospitalBundle:service')->findAll();
        $Request = $this->getRequest();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($Request->getMethod() == 'POST') {
            $id=$Request->get('ser');
            $medecin = $emmed->getRepository('StickyBitHospitalBundle:medecin')->findBy(array('idService'=>$id));
            
            return $this->render('StickyBitHospitalBundle:medecin:listmedecinbyservice.html.twig', array('listamed' => $medecin,'service' =>$id));
          
           }
        return $this->render('StickyBitHospitalBundle:service:list.html.twig', array('mods' => $service ,'mod' => $user->getUsername())); }
    
    
}

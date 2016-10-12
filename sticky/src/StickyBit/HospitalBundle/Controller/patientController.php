<?php

namespace Pi\symfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class patientController extends Controller
{
    public function authentificationAction(){
       $em = $this->container->get('doctrine')->getEntityManager();
        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
             $pat= $em->getRepository('StickyBitHospitalBundle:Patient')->findAll();
             $login= $Request->get('login');
             $password= $Request->get('password');
             $list=array();
             $list=$pat;
             $arrlength=count($list);
           for ($x = 0; $x <= $arrlength; $x++) { 
        if ($list[ $x ]-> getMailPatient()==$login && $list[ $x ]->getCinPatient()==$password ) {
                 return $this->redirect($this->generateUrl("envoyermsg")); 
                    }
 else {return $this->redirect($this->generateUrl("authentification"));}    
                    
        }}
           return $this->render('StickyBitHospitalBundle:patient:authentification.html.twig');}
           
}

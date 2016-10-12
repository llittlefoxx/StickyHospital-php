<?php
namespace Pidev\MedecinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\MedecinBundle\Entity\Patient;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PatientController
 *
 * @author Tlili Mohamed Ali
 */
class PatientController extends Controller {
    //put your code here
         public function searchAction(){
         
       $em =$this->container->get('doctrine')->getEntityManager();
        $pat = $em->getRepository('PidevMedecinBundle:Patient')->findAll();
        //Recherche par libelle
        $Request = $this->get('request');
        if ($Request->getMethod() == 'POST') {
            $search = $Request->get('search');
            // $Modeles = $em->getRepository('EspritParcBundle:Modele')->findBy(array("Libelle"=> $search));
            $query = $em->createQuery('SELECT P
                FROM PidevMedecinBundle:Patient P
                WHERE P.nomPatient like :nomPatient')->setParameter('nomPatient', '%' . $search . '%');
            $pat = $query->getResult();
        }
        return $this->render('PidevMedecinBundle:Rdv:new.html.twig', array("pat" => $pat));
     }

    
}

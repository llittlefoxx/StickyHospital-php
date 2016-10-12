<?php
namespace StickyBit\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use StickyBit\HospitalBundle\Form\RdvType;
use StickyBit\HospitalBundle\Entity\Rdv;
class RdvController extends Controller{
  
    
    public function listrdvAction()
    {
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $em = $this->container->get('doctrine')->getEntityManager();
         $patient = $em->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
         $modele = $em->getRepository('StickyBitHospitalBundle:Rdv')->findBy(array('idPatient'=>$patient->getIdPatient()));
         return $this->render('StickyBitHospitalBundle:Rdv:listrdv.html.twig', array('mods' => $modele)); 
    }
    
    
   public function addAction() {
        /* $em = $this->container->get('doctrine')->getEntityManager();
         $Request = $this->getRequest();
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $patient = $em->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
         $rdv=new Rdv();
         if ($Request->getMethod() == 'POST') {
           /* $medecin = $em->getRepository('StickyBitHospitalBundle:medecin')->findOneBy(array('mailMedecin'=>$mail));
            $date=$Request->get('debut');
            $idservice =$Request->get('service');
            $patient = $Request->get('mail');
            $rdv->setIdMedecin($medecin);
            $rdv->setIdPatient($patient);
            $rdv->setService($idservice);
            $rdv->setDateRdv($date);
            */
        
             //echo 'bye';*/
        $em = $this->container->get('doctrine')->getEntityManager();
        $rdv = new Rdv();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $nom=$user->getUsername();
        $mail=$user->getEmail();
        $patient = $em->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
        $form = $this->createForm(new RdvType(), $rdv);
        $request = $this->get('request');
        $form->handleRequest($request);
                if ($form->isValid()) {
                    $rdv->setIdPatient($patient);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($rdv);
                    $em->flush();
        //return $this->redirect($this->generateUrl("my_app_cinema_addFilm"));
         
                }
        return $this -> render('StickyBitHospitalBundle:Rdv:add.html.twig',array('Form'=> $form->createView()));
             
           
    }
 
     public function updateAction($id)
     {
       $em = $this->container->get('doctrine')->getEntityManager();
       $rdv = $em->getRepository('StickyBitHospitalBundle:Rdv')->find($id);
       $form =$this->container->get('form.factory')->create(new RdvType(), $rdv);
      
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        $form->bind($request);
        if ($form->isValid()) 
        {
          $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($rdv);
                $em->flush();
                return $this->redirect($this->generateUrl("listrdv"));
            }
        }
        return $this->render('StickyBitHospitalBundle:Rdv:update.html.twig', array('Form' => $form->createView()));
     }
    
        public function supAction($id)
    {
     $em=$this->container->get('doctrine')->getEntityManager();
     $f=$em->getrepository('StickyBitHospitalBundle:Rdv')->find($id);   
     $em->remove($f);
     $em->flush();
    return $this->redirect($this->generateUrl("listrdv"));}
    
    
      public function listAction()
    {
        return $this->render('StickyBitHospitalBundle:medecin:listmedecinbyservice.html.twig');
    
}



    }
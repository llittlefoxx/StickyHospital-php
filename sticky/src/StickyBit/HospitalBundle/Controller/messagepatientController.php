<?php

namespace StickyBit\HospitalBundle\Controller;

use StickyBit\HospitalBundle\Entity\Messagepatient;
use StickyBit\HospitalBundle\Entity\MessageMed;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use StickyBit\HospitalBundle\Form\MessagepatientType; 

class messagepatientController extends Controller{
    
     public function envoyernewmsgtopatAction(){
         $emmed = $this->container->get('doctrine')->getEntityManager();  
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $medecin = $emmed->getRepository('StickyBitHospitalBundle:medecin')->findOneBy(array('nomMedecin'=>$nom ,'mailMedecin'=>$mail));
         $medecin2 = $emmed->getRepository('StickyBitHospitalBundle:patient')->findAll();
         $m=array();
         $m=$medecin2;
         $images = array();
          for ($i=0;$i<count($m);$i++)  
         {
         $images[$i] = base64_encode(stream_get_contents($m[$i]->getUrlPhotoPatient()));
           return $this->render('StickyBitHospitalBundle:messagepatient:envoiemsg.html.twig', array('medecin2'=>$medecin2,'img'=>$images[$i]));	
        
         }}    
public function envoyermsgtopatAction($id2){
         $time = date_create(date(" Y-m-d h:i:sa "));
         $msg = new Messagepatient();
         $form=$this->container->get('form.factory')->create(new MessagepatientType(),$msg);
         $request=$this->getRequest();
         $emmed = $this->container->get('doctrine')->getEntityManager();  
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $medecin = $emmed->getRepository('StickyBitHospitalBundle:medecin')->findOneBy(array('nomMedecin'=>$nom ,'mailMedecin'=>$mail));
         $medecin2 = $emmed->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('idPatient'=>$id2));
         
             $llm=array();
             $llm=$medecin2;
             if($request->getMethod()=='POST'){
             $msg->setDateEnv($time);
             $msg->setIdPatient($medecin2);
             $msg->setIdmedecin($medecin);
             $form->bind($request);
             if($form->isValid()){
             $emm=$this->container->get('doctrine')->getEntityManager(); 
             $emm->persist($msg);
             $emm->flush();
    }}
         return $this->render('StickyBitHospitalBundle:messagepatient:envoiemsg1.html.twig',array('form'=>$form->createView())); 
    }
 
 
    
          
    public function affichermsgAction(){
         $em = $this->container->get('doctrine')->getEntityManager();
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $li = $em->getRepository('StickyBitHospitalBundle:messagepatient')->findAll();
         $medecin2 = $em->getRepository('StickyBitHospitalBundle:patient')->findBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
         $medecin3 = $em->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
         $m=array();
         $m=$medecin2;
         $msg= $em->getRepository('StickyBitHospitalBundle:messagepatient')->findBy(array('idPatient'=>$m[0]->getIdPatient()));
         $l=array();
         $l=$msg;
       for ($i = 0; $i <=  count($l) ; $i++){
           $id= $em->getRepository('StickyBitHospitalBundle:messagepatient')->findBy(array('idmedecin'=>$l[$i]->getIdmedecin()));
           $ll=array();
           $ll=$id;
           $patient= $em->getRepository('StickyBitHospitalBundle:medecin')->findBy(array('idMedecin'=>$ll[$i]->getIdmedecin()));
           $patient2= $em->getRepository('StickyBitHospitalBundle:medecin')->findOneBy(array('idMedecin'=>$ll[$i]->getIdmedecin()));
           $llm=array();
           $llm=$patient;
           $images = array();
           $images[0] = base64_encode(stream_get_contents($m[0]->getUrlPhotoPatient()));
         //  $image = array();
         //  $image[0] = base64_encode(stream_get_contents($llm[$i]->getUrlPhoto()));
           $msg = new MessageMed();
           $Request = $this->getRequest();
           $emmed = $this->container->get('doctrine')->getEntityManager();  
          if($Request->getMethod()=='POST'){
           $time = date_create(date(" Y-m-d h:i:sa "));
           $message = $Request->get('message');
           $patient = $Request->get('patient');
           $msg->setDateEnv($time);
           $msg->setCorp($message);
           $msg->setIdMedecin($patient2);
           $msg->setIdPatient($medecin3);
           $em = $this->getDoctrine()->getManager();
           $em->persist($msg);
           $em->flush();
           return $this->render('StickyBitHospitalBundle:messagemed:list.html.twig', array('msg' =>$id ,'img' => $images[0],'pat'=>$llm[$i],'msg2'=>$msg));          
// return $this->render('StickyBitHospitalBundle:messagemed:list.html.twig', array('msg' =>$id ,'img' => $images[0],'pat'=>$llm[$i],'imgmed' => $image[0],'msg2'=>$msg));
           return $this->redirect($this->generateUrl("listmsgpat"));
             
         }
         
        
     //    return $this->render('StickyBitHospitalBundle:messagemed:list.html.twig', array('msg' =>$id ,'img' => $images[0],'pat'=>$llm[$i],'imgmed' => $image[0],'msg2'=>$msg));
      
         return $this->render('StickyBitHospitalBundle:messagemed:list.html.twig', array('msg' =>$id ,'img' => $images[0],'pat'=>$llm[$i],'msg2'=>$msg)); 
          }
    }
    
   
    
    public function  afficherhomeAction()
    {
 return $this->render('StickyBitHospitalBundle:messagemed:home.html.twig');
    }

    
    
    
    
    
    
    
}

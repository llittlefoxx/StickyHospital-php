<?php

namespace StickyBit\HospitalBundle\Controller;

use StickyBit\HospitalBundle\Entity\MessageMed;
use StickyBit\HospitalBundle\Entity\Messagepatient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use StickyBit\HospitalBundle\Form\MessageMedType; 
use StickyBit\HospitalBundle\Entity\Medecin;
class messageMedController extends Controller{
    
    
    public function envoyernewmsgtoMedAction()
    {    $emmed = $this->container->get('doctrine')->getEntityManager();  
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $medecin = $emmed->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
         $medecin2 = $emmed->getRepository('StickyBitHospitalBundle:medecin')->findAll();
         $m=array();
         $m=$medecin2;
      //   $images = array();
     /*     for ($i=0;$i<count($m);$i++)  
         {
         $images[$i] = base64_encode(stream_get_contents($m[$i]->getUrlPhoto()));
         
 }*/
    
    return $this->render('StickyBitHospitalBundle:messagemed:envoiemsg.html.twig', array('medecin2'=>$medecin2,'nommed'=>$medecin2));}  
    
    
    
    
    
    
    
    
    
    
public function envoyermsgtoMedAction($id){
         $time = date_create(date(" Y-m-d h:i:sa "));
         $msg = new MessageMed();
         $form=$this->container->get('form.factory')->create(new MessageMedType(),$msg);
         $request=$this->getRequest();
         $emmed = $this->container->get('doctrine')->getEntityManager();  
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $medecin = $emmed->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
         $medecin2 = $emmed->getRepository('StickyBitHospitalBundle:medecin')->findOneBy(array('idMedecin'=>$id));
         
         $llm=array();
         $llm=$medecin2;
             if($request->getMethod()=='POST'){
             $msg->setDateEnv($time);
             $msg->setIdpatient($medecin);
             $msg->setIdMedecin($medecin2);
             $form->bind($request);
             if($form->isValid()){
           $emm=$this->container->get('doctrine')->getEntityManager(); 
          $emm->persist($msg);
          $emm->flush();
    }}
         return $this->render('StickyBitHospitalBundle:messagemed:envoiemsg1.html.twig',array('form'=>$form->createView())); 
    }


    public function affichermsgmedAction()
    {
         
         $em = $this->container->get('doctrine')->getEntityManager();
         $user = $this->container->get('security.context')->getToken()->getUser();
         $nom=$user->getUsername();
         $mail=$user->getEmail();
         $li = $em->getRepository('StickyBitHospitalBundle:messageMed')->findAll();
         $medecin2 = $em->getRepository('StickyBitHospitalBundle:medecin')->findBy(array('nomMedecin'=>$nom ,'mailMedecin'=>$mail));
         $medecin3 = $em->getRepository('StickyBitHospitalBundle:medecin')->findOneBy(array('nomMedecin'=>$nom ,'mailMedecin'=>$mail));
         $m=array();
         $m=$medecin2;
         $msg= $em->getRepository('StickyBitHospitalBundle:messageMed')->findBy(array('idMedecin'=>$m[0]->getIdMedecin()));
         $l=array();
         $l=$msg;
          for ($i = 0; $i <=  count($l) ; $i++){
         $id= $em->getRepository('StickyBitHospitalBundle:messageMed')->findBy(array('idpatient'=>$l[$i]->getIdpatient()));
         $ll=array();
         $ll=$id;
      
         $patient= $em->getRepository('StickyBitHospitalBundle:patient')->findBy(array('idPatient'=>$ll[$i]->getIdPatient()));
         
         $patient2= $em->getRepository('StickyBitHospitalBundle:patient')->findOneBy(array('idPatient'=>$ll[$i]->getIdPatient()));
         $llm=array();
         $llm=$patient;
       //  $images = array();
         //$images[0] = base64_encode(stream_get_contents($m[0]->getUrlPhoto()));
           $image = array();
           $image[0] = base64_encode(stream_get_contents($llm[$i]->getUrlPhotoPatient()));
           $msg = new Messagepatient();
           $Request = $this->getRequest();
           $emmed = $this->container->get('doctrine')->getEntityManager();  
       if($Request->getMethod()=='POST'){
           $time = date_create(date(" Y-m-d h:i:sa "));
           $message = $Request->get('message');
           $patient = $Request->get('patient');
           $msg->setDateEnv($time);
           $msg->setCorp($message);
           $msg->setIdmedecin($medecin3);
           $msg->setIdPatient($patient2);
           $em = $this->getDoctrine()->getManager();
           $em->persist($msg);
           $em->flush();
           return $this->render('StickyBitHospitalBundle:messagepatient:list.html.twig', array('msg' =>$id ,'pat'=>$llm[$i],'imgmed' => $image,'msg2'=>$msg));
           // return $this->render('StickyBitHospitalBundle:messagepatient:list.html.twig', array('msg' =>$id ,'img' => $images[0],'pat'=>$llm[$i],'msg2'=>$msg));
           return $this->redirect($this->generateUrl("listmsgmed"));
             
       }
       //  return $this->render('StickyBitHospitalBundle:messagepatient:list.html.twig', array('msg' =>$id ,'img' => $images[0],'pat'=>$llm[$i],'imgmed' => $image[0],'msg2'=>$msg));
         
                  return $this->render('StickyBitHospitalBundle:messagepatient:list.html.twig', array('msg' =>$id ,'pat'=>$llm[$i],'imgmed' => $image,'msg2'=>$msg));
       
       }}

          
    public function  afficherhomemedAction()
    {
                
return $this->render('StickyBitHospitalBundle:messagemed:home.html.twig');

    }

    
    
    
    
    
    
    
    
    
    
}

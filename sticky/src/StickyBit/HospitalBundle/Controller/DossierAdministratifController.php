<?php
namespace StickyBit\HospitalBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



class DossierAdministratifController extends Controller
{
     public function indexAction($idPatient)
    {
        $em=$this->container->get('doctrine')->getEntityManager(); 
        $tab = array('idPatient' =>$idPatient);
                   
        $pat=$em->getRepository('StickyBitHospitalBundle:Patient')->find($idPatient);      
        $hos=$em->getRepository('StickyBitHospitalBundle:Hospitalisation')->findBy($tab);
        
        $facture = $em->getRepository("StickyBitHospitalBundle:Facture")->findBy($tab); 
      
        return $this->render('StickyBitHospitalBundle:DossierAdministratif:index.html.twig', array('pat' => $pat ,'hos' => $hos, 'facture' => $facture));
    }
        
   
   
    public function ligneAction($id) {
        $em = $this->getDoctrine()->getManager();
        $tab = array('idFacture' => $id);
        $ligne = $em->getRepository("StickyBitHospitalBundle:LigneFacture")->findBy($tab);
        
       // $res = $ligne->findBy($tab);
        return $this->render('StickyBitHospitalBundle:DossierAdministratif:ligne.html.twig', array('ligne' => $ligne,'id'=>$id));
    }

    public function generatePdfAction($id) {
        $em = $this->getDoctrine()->getManager();
        $tab = array('idFacture' => $id);
        $ligne = $em->getRepository("StickyBitHospitalBundle:LigneFacture")->findBy($tab);;
        
       // $res = $ligne
        $html = $this->renderView('StickyBitHospitalBundle:DossierAdministratif:TestPdf.html.twig', array(
            'some' => $ligne
        ));

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="fact.pdf"'
                )
        );
    }
    
    public function generatePdfhosAction($id) {
        $em = $this->getDoctrine()->getManager();
        $tab = array('idHos' => $id);
        $hos = $em->getRepository("StickyBitHospitalBundle:Hospitalisation")->findBy($tab);;
        
       // $res = $ligne
        $html = $this->renderView('StickyBitHospitalBundle:DossierAdministratif:TestPdfhos.html.twig', array(
            'some' => $hos
        ));

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="hos.pdf"'
                )
        );
    }
    
    public function generatePdfdossierAction() {
        
        $em=$this->container->get('doctrine')->getEntityManager(); 
        $tab = array('idPatient' => 2);
       // $em2=$this->container->get('doctrine')->getEntityManager();            
        $pat=$em->getRepository('StickyBitHospitalBundle:Patient')->find($tab);      
        $hos=$em->getRepository('StickyBitHospitalBundle:Hospitalisation')->findBy($tab);
        
       $facture = $em->getRepository("StickyBitHospitalBundle:Facture")->findBy($tab);
       // $med=$em->getRepository("StickyBitHospitalBundle:Medecin")->findBy($hos);
       // $tab = array($idPatient);
       // $res = $facture->find($idPatient);
        
       
    
       // $res = $ligne
       $html = $this->renderView('StickyBitHospitalBundle:DossierAdministratif:TestPdfdos.html.twig', array('pat' => $pat ,'hos' => $hos, 'facture' => $facture));
        //$html = $this->renderView('StickyBitHospitalBundle:DossierAdministratif:TestPdfdos.html.twig', array('pat' => $pat));
       

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="hos.pdf"'
                )
        );
    }
}


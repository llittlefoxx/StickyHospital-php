<?php

namespace StickyBit\HospitalBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FactureController extends Controller {

    public function affichageAction() {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository("StickyBitHospitalBundle:Facture");
        $user = $this->container->get('security.context')->getToken()->getUser();
        $nom=$user->getUsername();
        $mail=$user->getEmail();
        $patient = $em->getRepository('StickyBitHospitalBundle:patient')->findBy(array('nomPatient'=>$nom ,'mailPatient'=>$mail));
        $m=array();
        $m=$patient;
        $tab = array('idPatient'=>$m[0]->getIdPatient());
        $res = $facture->findBy($tab);
        return $this->render('StickyBitHospitalBundle:Facture:consult.html.twig', array('tab' => $res));
    }

    public function ligneAction($id) {
        $em = $this->getDoctrine()->getManager();
        $ligne = $em->getRepository("StickyBitHospitalBundle:LigneFacture");
        $tab = array('idFacture' => $id);
        $res = $ligne->findBy($tab);
        return $this->render('StickyBitHospitalBundle:Facture:ligne.html.twig', array('tab' => $res,'id'=>$id));
    }

    public function generatePdfAction($id) {
        $em = $this->getDoctrine()->getManager();
        $ligne = $em->getRepository("StickyBitHospitalBundle:LigneFacture");
        $tab = array('idFacture' => $id);
        $res = $ligne->findBy($tab);
        $html = $this->renderView('StickyBitHospitalBundle:Facture:TestPdf.html.twig', array(
            'some' => $res
        ));

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="file.pdf"'
                )
        );
    }

}

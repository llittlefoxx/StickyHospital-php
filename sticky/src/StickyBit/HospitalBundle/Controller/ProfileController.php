<?php

namespace StickyBit\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use StickyBit\HospitalBundle\Entity\Patient;
use StickyBit\HospitalBundle\Entity\Dossier;
use StickyBit\HospitalBundleEntity\DossierMedical;
use StickyBit\HospitalBundleEntity\Allergie;
use StickyBit\HospitalBundle\Entity\Maladie;
use StickyBit\HospitalBundleEntity\Observation;
use StickyBit\HospitalBundle\Entity\Ordonnance;
use StickyBit\HospitalBundle\Entity\Traitement;
use StickyBit\HospitalBundle\Entity\Intervention;
use StickyBit\HospitalBundle\Form\PatientType;
class ProfileController extends Controller
{

      public function indexAction($id)
    {
       $em = $this->getDoctrine()->getManager();
        $Patient = $em->getRepository('StickyBitHospitalBundle:Patient')->find($id);
        $form = $this->createForm(new PatientType(), $Patient);
        $request = $this->get('request');
        
        $form->handleRequest($request);
        
        if ($form->isValid()) 
        {
            $em->persist($Patient);
            $em->flush();
            return $this->render('StickyBitHospitalBundle:Profile:index.html.twig',array('Form' => $form->createView(),'images' => $images));
        }
        $images = array();
        foreach ($Patient as $key => $patient) {
        $images[$key] = base64_encode(stream_get_contents($patient->getUrlPhotoPatient()));
        }
         return $this->render('StickyBitHospitalBundle:Profile:index.html.twig',array('Form' => $form->createView(),'images' => $images));
    }
    public function afficherAction($id){
        $em = $this->getDoctrine()->getManager();
        $dossier = $em->getRepository('StickyBitHospitalBundle:Dossier')->find($id);
        $idDosP = $dossier->getIdDossierpatient();
        $dossierMedical = $em->getRepository('StickyBitHospitalBundle:DossierMedical')->find($idDosP);
        $idDmed= $dossierMedical->getIdDossiermedical();
        $queryAllergie = $em->createQuery('SELECT a FROM StickyBitHospitalBundle:Allergie a where a.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Allergie = $queryAllergie->getResult();
        $queryMaladie = $em->createQuery('select m from StickyBitHospitalBundle:Maladie m where m.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Maladies = $queryMaladie->getResult();
        $queryInterv = $em->createQuery('select i from StickyBitHospitalBundle:Intervention i where i.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Interventions = $queryInterv->getResult();
        $queryObserv = $em->createQuery('select o from StickyBitHospitalBundle:Observation o where o.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Observations = $queryObserv->getResult();
        $queryOrdonnance = $em->createQuery('select r from StickyBitHospitalBundle:Ordonnance r where r.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Ordonnances = $queryOrdonnance->getResult();
        $querytrait = $em->createQuery('select t from StickyBitHospitalBundle:Traitement t where t.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Traitements = $querytrait->getResult();
        return $this->render('StickyBitHospitalBundle:DossierMedical:index.html.twig',array(
            'entity'      => $dossierMedical,
            'Traitements' => $Traitements,
            'Allergies' => $Allergie,
            'Ordonnances' => $Ordonnances,
            'Observations' => $Observations,
            'Interventions' => $Interventions,
            'Maladies' => $Maladies,
                ));
        
    }
        public function printAction($id){
        $em = $this->getDoctrine()->getManager();
        $dossier = $em->getRepository('StickyBitHospitalBundle:Dossier')->find($id);
        $idDosP = $dossier->getIdDossierpatient();
        $dossierMedical = $em->getRepository('StickyBitHospitalBundle:DossierMedical')->find($idDosP);
        $idDmed= $dossierMedical->getIdDossiermedical();
        $queryAllergie = $em->createQuery('SELECT a FROM StickyBitHospitalBundle:Allergie a where a.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Allergie = $queryAllergie->getResult();
        $queryMaladie = $em->createQuery('select m from StickyBitHospitalBundle:Maladie m where m.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Maladies = $queryMaladie->getResult();
        $queryInterv = $em->createQuery('select i from StickyBitHospitalBundle:Intervention i where i.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Interventions = $queryInterv->getResult();
        $queryObserv = $em->createQuery('select o from StickyBitHospitalBundle:Observation o where o.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Observations = $queryObserv->getResult();
        $queryOrdonnance = $em->createQuery('select r from StickyBitHospitalBundle:Ordonnance r where r.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Ordonnances = $queryOrdonnance->getResult();
        $querytrait = $em->createQuery('select t from StickyBitHospitalBundle:Traitement t where t.idDossiermedical=:id')
                               ->setParameter('id',$idDmed);
        $Traitements = $querytrait->getResult();
        return $this->render('StickyBitHospitalBundle:DossierMedical:print.html.twig',array(
            'entity'      => $dossierMedical,
            'Traitements' => $Traitements,
            'Allergies' => $Allergie,
            'Ordonnances' => $Ordonnances,
            'Observations' => $Observations,
            'Interventions' => $Interventions,
            'Maladies' => $Maladies,
                ));
        
    }
}


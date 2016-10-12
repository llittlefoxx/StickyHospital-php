<?php

namespace Backend\MedecinBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Backend\MedecinBundle\Entity\DossierMedical;
use Backend\MedecinBundle\Entity\Allergie;
use Backend\MedecinBundle\Entity\Maladie;
use Backend\MedecinBundle\Entity\Ordonnance;
use Backend\MedecinBundle\Entity\Intervention;
use Backend\MedecinBundle\Entity\Traitement;
use Backend\MedecinBundle\Entity\Observation;
use Backend\MedecinBundle\Form\DossierMedicalType;

/**
 * DossierMedical controller.
 *
 * @Route("/dossiermedical")
 */
class DossierMedicalController extends Controller
{

    /**
     * Lists all DossierMedical entities.
     *
     * @Route("/", name="dossiermedical")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackendMedecinBundle:DossierMedical')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new DossierMedical entity.
     *
     * @Route("/", name="dossiermedical_create")
     * @Method("POST")
     * @Template("BackendMedecinBundle:DossierMedical:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new DossierMedical();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dossiermedical_show', array('id' => $entity->getIdDossiermedical())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a DossierMedical entity.
    *
    * @param DossierMedical $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(DossierMedical $entity)
    {
        $form = $this->createForm(new DossierMedicalType(), $entity, array(
            'action' => $this->generateUrl('dossiermedical_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DossierMedical entity.
     *
     * @Route("/new", name="dossiermedical_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new DossierMedical();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a DossierMedical entity.
     *
     * @Route("/{id}", name="dossiermedical_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BackendMedecinBundle:DossierMedical')->find($id);
        $queryAllergie = $em->createQuery('SELECT a FROM BackendMedecinBundle:Allergie a where a.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Allergie = $queryAllergie->getResult();
        $queryMaladie = $em->createQuery('select m from BackendMedecinBundle:Maladie m where m.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Maladies = $queryMaladie->getResult();
        $queryInterv = $em->createQuery('select i from BackendMedecinBundle:Intervention i where i.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Interventions = $queryInterv->getResult();
        $queryObserv = $em->createQuery('select o from BackendMedecinBundle:Observation o where o.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Observations = $queryObserv->getResult();
        $queryOrdonnance = $em->createQuery('select r from BackendMedecinBundle:Ordonnance r where r.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Ordonnances = $queryOrdonnance->getResult();
        $querytrait = $em->createQuery('select t from BackendMedecinBundle:Traitement t where t.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Traitements = $querytrait->getResult();
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DossierMedical entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return array(
            'entity'      => $entity,
            'Traitements' => $Traitements,
            'Allergies' => $Allergie,
            'Ordonnances' => $Ordonnances,
            'Observations' => $Observations,
            'Interventions' => $Interventions,
            'Maladies' => $Maladies,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing DossierMedical entity.
     *
     * @Route("/{id}/edit", name="dossiermedical_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:DossierMedical')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DossierMedical entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a DossierMedical entity.
    *
    * @param DossierMedical $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DossierMedical $entity)
    {
        $form = $this->createForm(new DossierMedicalType(), $entity, array(
            'action' => $this->generateUrl('dossiermedical_update', array('id' => $entity->getIdDossiermedical())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DossierMedical entity.
     *
     * @Route("/{id}", name="dossiermedical_update")
     * @Method("PUT")
     * @Template("BackendMedecinBundle:DossierMedical:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:DossierMedical')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DossierMedical entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('dossiermedical_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a DossierMedical entity.
     *
     * @Route("/{id}", name="dossiermedical_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackendMedecinBundle:DossierMedical')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DossierMedical entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dossiermedical'));
    }

    /**
     * Creates a form to delete a DossierMedical entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dossiermedical_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    public function printAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:DossierMedical')->find($id);
        $queryAllergie = $em->createQuery('SELECT a FROM BackendMedecinBundle:Allergie a where a.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Allergie = $queryAllergie->getResult();
        $queryMaladie = $em->createQuery('select m from BackendMedecinBundle:Maladie m where m.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Maladies = $queryMaladie->getResult();
        $queryInterv = $em->createQuery('select i from BackendMedecinBundle:Intervention i where i.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Interventions = $queryInterv->getResult();
        $queryObserv = $em->createQuery('select o from BackendMedecinBundle:Observation o where o.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Observations = $queryObserv->getResult();
        $queryOrdonnance = $em->createQuery('select r from BackendMedecinBundle:Ordonnance r where r.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Ordonnances = $queryOrdonnance->getResult();
        $querytrait = $em->createQuery('select t from BackendMedecinBundle:Traitement t where t.idDossiermedical=:id')
                               ->setParameter('id',$id);
        $Traitements = $querytrait->getResult();

      return $this->render('BackendMedecinBundle:DossierMedical:print.html.twig', array(
            'entity' => $entity,
            'Traitements' => $Traitements,
            'Allergies' => $Allergie,
            'Ordonnances' => $Ordonnances,
            'Observations' => $Observations,
            'Interventions' => $Interventions,
            'Maladies' => $Maladies,
        ));
    }
    
}

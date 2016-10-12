<?php

namespace Backend\MedecinBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Backend\MedecinBundle\Entity\Intervention;
use Backend\MedecinBundle\Form\InterventionType;

/**
 * Intervention controller.
 *
 * @Route("/intervention")
 */
class InterventionController extends Controller
{

    /**
     * Lists all Intervention entities.
     *
     * @Route("/", name="intervention")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackendMedecinBundle:Intervention')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Intervention entity.
     *
     * @Route("/", name="intervention_create")
     * @Method("POST")
     * @Template("BackendMedecinBundle:Intervention:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Intervention();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('intervention_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Intervention entity.
    *
    * @param Intervention $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Intervention $entity)
    {
        $form = $this->createForm(new InterventionType(), $entity, array(
            'action' => $this->generateUrl('intervention_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Intervention entity.
     *
     * @Route("/new", name="intervention_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Intervention();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Intervention entity.
     *
     * @Route("/{id}", name="intervention_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Intervention')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervention entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Intervention entity.
     *
     * @Route("/{id}/edit", name="intervention_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Intervention')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervention entity.');
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
    * Creates a form to edit a Intervention entity.
    *
    * @param Intervention $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Intervention $entity)
    {
        $form = $this->createForm(new InterventionType(), $entity, array(
            'action' => $this->generateUrl('intervention_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
  
    public function delete2Action($id,$idm){
        $em = $this->getDoctrine()->getManager();
        $Intervention = $em->getRepository('BackendMedecinBundle:Intervention')->find($id);
        $em->remove($Intervention);
        $em->flush();
        return $this->redirect($this->generateUrl("backend_hospital_dossiermedical",array('id'=> $idm)));
    }
      public function ajoutAction($id) {
        $Intervention = new Intervention();
        $form = $this->createForm(new InterventionType(), $Intervention);
        $request = $this->get('request');
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Intervention);
            $em->flush();
            return $this->render('BackendMedecinBundle:Intervention:new.html.twig',array('Form' => $form->createView(),'id'=>$id));
        }
        return $this->render('BackendMedecinBundle:Intervention:new.html.twig', array('Form' => $form->createView(),'id'=>$id));
    }

    /**
     * Creates a form to delete a Intervention entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('intervention_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

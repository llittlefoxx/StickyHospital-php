<?php

namespace Backend\MedecinBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Backend\MedecinBundle\Entity\Traitement;
use Backend\MedecinBundle\Form\TraitementType;

/**
 * Traitement controller.
 *
 * @Route("/traitement")
 */
class TraitementController extends Controller
{

    /**
     * Lists all Traitement entities.
     *
     * @Route("/", name="traitement")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackendMedecinBundle:Traitement')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Traitement entity.
     *
     * @Route("/", name="traitement_create")
     * @Method("POST")
     * @Template("BackendMedecinBundle:Traitement:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Traitement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('traitement_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

  

    /**
     * Displays a form to create a new Traitement entity.
     *
     * @Route("/new", name="traitement_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Traitement();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Traitement entity.
     *
     * @Route("/{id}", name="traitement_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Traitement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Traitement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Traitement entity.
     *
     * @Route("/{id}/edit", name="traitement_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Traitement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Traitement entity.');
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
    * Creates a form to edit a Traitement entity.
    *
    * @param Traitement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Traitement $entity)
    {
        $form = $this->createForm(new TraitementType(), $entity, array(
            'action' => $this->generateUrl('traitement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Traitement entity.
     *
     * @Route("/{id}", name="traitement_update")
     * @Method("PUT")
     * @Template("BackendMedecinBundle:Traitement:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Traitement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Traitement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('traitement_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
  public function ajoutAction($id) {
        $Traitement = new Traitement();
        $form = $this->createForm(new TraitementType(), $Traitement);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Traitement);
            $em->flush();
             return $this->render('BackendMedecinBundle:Traitement:new.html.twig', array('Form' => $form->createView(),'id'=>$id));
        }
        return $this->render('BackendMedecinBundle:Traitement:new.html.twig', array('Form' => $form->createView(),'id'=>$id));
    }
    public function deleteAction($id,$idm) {
        $em = $this->getDoctrine()->getManager();
        $Traitement = $em->getRepository('BackendMedecinBundle:Traitement')->find($id);
        $em->remove($Traitement);
        $em->flush();
       return $this->redirect($this->generateUrl("backend_hospital_dossiermedical",array('id'=> $idm)));
    }

    /**
     * Creates a form to delete a Traitement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('traitement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

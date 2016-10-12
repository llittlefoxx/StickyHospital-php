<?php

namespace Backend\MedecinBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Backend\MedecinBundle\Entity\Allergie;
use Backend\MedecinBundle\Form\AllergieType;

/**
 * Allergie controller.
 *
 * @Route("/allergie")
 */
class AllergieController extends Controller
{

    /**
     * Lists all Allergie entities.
     *
     * @Route("/", name="allergie")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackendMedecinBundle:Allergie')->findAll();

        return array(
            'entities' => $entities,
        );
    }
     public function ajoutAction($id) {
        $Allergie = new Allergie();
        $form = $this->createForm(new AllergieType(), $Allergie);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Allergie);
            $em->flush();
             return $this->render('BackendMedecinBundle:Allergie:new.html.twig', array('Form' => $form->createView(),'id'=>$id));
        }
        return $this->render('BackendMedecinBundle:Allergie:new.html.twig', array('Form' => $form->createView(),'id'=>$id));
    }
    public function deleteAction($id,$idm) {
        $em = $this->getDoctrine()->getManager();
        $Allergie = $em->getRepository('BackendMedecinBundle:Allergie')->find($id);
        $em->remove($Allergie);
        $em->flush();
       return $this->redirect($this->generateUrl("backend_hospital_dossiermedical",array('id'=> $idm)));
    }
    /**
    * Creates a form to create a Allergie entity.
    *
    * @param Allergie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Allergie $entity)
    {
        $form = $this->createForm(new AllergieType(), $entity, array(
            'action' => $this->generateUrl('allergie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    

    /**
     * Finds and displays a Allergie entity.
     *
     * @Route("/{id}", name="allergie_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Allergie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Allergie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Allergie entity.
     *
     * @Route("/{id}/edit", name="allergie_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Allergie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Allergie entity.');
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
    * Creates a form to edit a Allergie entity.
    *
    * @param Allergie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Allergie $entity)
    {
        $form = $this->createForm(new AllergieType(), $entity, array(
            'action' => $this->generateUrl('allergie_update', array('id' => $entity->getIdAllergie())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Allergie entity.
     *
     * @Route("/{id}", name="allergie_update")
     * @Method("PUT")
     * @Template("BackendMedecinBundle:Allergie:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendMedecinBundle:Allergie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Allergie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('allergie_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    

    /**
     * Creates a form to delete a Allergie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('allergie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

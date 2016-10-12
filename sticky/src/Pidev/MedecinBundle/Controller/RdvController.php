<?php

namespace Pidev\MedecinBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pidev\MedecinBundle\Entity\Rdv;
use Pidev\MedecinBundle\Entity\Patient;
use Pidev\MedecinBundle\Form\RdvType;

/**
 * Rdv controller.
 *
 * @Route("/rdv")
 */
class RdvController extends Controller
{

    /**
     * Lists all Rdv entities.
     *
     * @Route("/", name="rdv")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevMedecinBundle:Rdv')->findAll();
        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Rdv entity.
     *
     * @Route("/", name="rdv_create")
     * @Method("POST")
     * @Template("PidevMedecinBundle:Rdv:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Rdv();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rdv_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Rdv entity.
    *
    * @param Rdv $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Rdv $entity)
    {
        $form = $this->createForm(new RdvType(), $entity, array(
            'action' => $this->generateUrl('rdv_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rdv entity.
     *
     * @Route("/new", name="rdv_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Rdv();
        $form   = $this->createCreateForm($entity);

        $em =$this->container->get('doctrine')->getEntityManager();
        $pat = $em->getRepository('PidevMedecinBundle:Patient')->findAll();
        //Recherche par libelle
        $Request = $this->get('request');
        if ($Request->getMethod() == 'POST') {
            $search = $Request->get('search');
            // $Modeles = $em->getRepository('EspritParcBundle:Modele')->findBy(array("Libelle"=> $search));
            $query = $em->createQuery('SELECT P
                FROM PidevMedecinBundle:Patient P
                WHERE P.nomPatient like :nomPatient')->setParameter('nomPatient', '%' . $search . '%');
            $pat = $query->getResult();
        
        }
        
        
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            "pat" => $pat,
        );
    }

    /**
     * Finds and displays a Rdv entity.
     *
     * @Route("/{id}", name="rdv_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevMedecinBundle:Rdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rdv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Rdv entity.
     *
     * @Route("/{id}/edit", name="rdv_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevMedecinBundle:Rdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rdv entity.');
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
    * Creates a form to edit a Rdv entity.
    *
    * @param Rdv $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rdv $entity)
    {
        $form = $this->createForm(new RdvType(), $entity, array(
            'action' => $this->generateUrl('rdv_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rdv entity.
     *
     * @Route("/{id}", name="rdv_update")
     * @Method("PUT")
     * @Template("PidevMedecinBundle:Rdv:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevMedecinBundle:Rdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rdv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rdv_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Rdv entity.
     *
     * @Route("/{id}", name="rdv_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevMedecinBundle:Rdv')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rdv entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rdv'));
    }

    /**
     * Creates a form to delete a Rdv entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdv_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

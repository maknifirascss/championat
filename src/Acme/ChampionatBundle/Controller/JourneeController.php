<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ChampionatBundle\Entity\Journee;
use Acme\ChampionatBundle\Form\JourneeType;

/**
 * Journee controller.
 *
 * @Route("/journee")
 */
class JourneeController extends Controller {

    /**
     * Lists all Journee entities.
     *
     * @Route("/", name="journee")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeChampionatBundle:Journee')->findAll();
        $entities2 = $em->getRepository('AcmeChampionatBundle:Ligue')->find(1);
        $entities3 = $em->getRepository('AcmeChampionatBundle:Saison')->find(1);
        return array(
            'entities' => $entities,
            'entities2' => $entities2,
            'entities3' => $entities3,
        );
    }

    /**
     * Creates a new Journee entity.
     *
     * @Route("/", name="journee_create")
     * @Method("POST")
     * @Template("AcmeChampionatBundle:Journee:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Journee();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('journee_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Journee entity.
     *
     * @param Journee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Journee $entity) {
        $form = $this->createForm(new JourneeType(), $entity, array(
            'action' => $this->generateUrl('journee_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Journee entity.
     *
     * @Route("/new", name="journee_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Journee();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Journee entity.
     *
     * @Route("/{id}", name="journee_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Journee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Journee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Journee entity.
     *
     * @Route("/{id}/edit", name="journee_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Journee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Journee entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Journee entity.
     *
     * @param Journee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Journee $entity) {
        $form = $this->createForm(new JourneeType(), $entity, array(
            'action' => $this->generateUrl('journee_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Journee entity.
     *
     * @Route("/{id}", name="journee_update")
     * @Method("PUT")
     * @Template("AcmeChampionatBundle:Journee:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Journee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Journee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('journee_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Journee entity.
     *
     * @Route("/{id}", name="journee_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeChampionatBundle:Journee')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Journee entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('journee'));
    }

    /**
     * Creates a form to delete a Journee entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('journee_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}

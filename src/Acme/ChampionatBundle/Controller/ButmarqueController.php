<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ChampionatBundle\Entity\Butmarque;
use Acme\ChampionatBundle\Form\ButmarqueType;

/**
 * Butmarque controller.
 *
 * @Route("/butmarque")
 */
class ButmarqueController extends Controller
{

    /**
     * Lists all Butmarque entities.
     *
     * @Route("/", name="butmarque")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeChampionatBundle:Butmarque')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Butmarque entity.
     *
     * @Route("/", name="butmarque_create")
     * @Method("POST")
     * @Template("AcmeChampionatBundle:Butmarque:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Butmarque();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('butmarque_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Butmarque entity.
     *
     * @param Butmarque $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Butmarque $entity)
    {
        $form = $this->createForm(new ButmarqueType(), $entity, array(
            'action' => $this->generateUrl('butmarque_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Butmarque entity.
     *
     * @Route("/new", name="butmarque_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Butmarque();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Butmarque entity.
     *
     * @Route("/{id}", name="butmarque_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Butmarque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Butmarque entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Butmarque entity.
     *
     * @Route("/{id}/edit", name="butmarque_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Butmarque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Butmarque entity.');
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
    * Creates a form to edit a Butmarque entity.
    *
    * @param Butmarque $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Butmarque $entity)
    {
        $form = $this->createForm(new ButmarqueType(), $entity, array(
            'action' => $this->generateUrl('butmarque_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Butmarque entity.
     *
     * @Route("/{id}", name="butmarque_update")
     * @Method("PUT")
     * @Template("AcmeChampionatBundle:Butmarque:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Butmarque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Butmarque entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('butmarque_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Butmarque entity.
     *
     * @Route("/{id}", name="butmarque_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeChampionatBundle:Butmarque')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Butmarque entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('butmarque'));
    }

    /**
     * Creates a form to delete a Butmarque entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('butmarque_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

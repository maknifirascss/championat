<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ChampionatBundle\Entity\Classement;
use Acme\ChampionatBundle\Form\ClassementType;

/**
 * Classement controller.
 *
 * @Route("/classement")
 */
class ClassementController extends Controller
{

    /**
     * Lists all Classement entities.
     *
     * @Route("/", name="classement")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeChampionatBundle:Classement')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Classement entity.
     *
     * @Route("/", name="classement_create")
     * @Method("POST")
     * @Template("AcmeChampionatBundle:Classement:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Classement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classement_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Classement entity.
     *
     * @param Classement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Classement $entity)
    {
        $form = $this->createForm(new ClassementType(), $entity, array(
            'action' => $this->generateUrl('classement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Classement entity.
     *
     * @Route("/new", name="classement_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Classement();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Classement entity.
     *
     * @Route("/{id}", name="classement_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Classement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Classement entity.
     *
     * @Route("/{id}/edit", name="classement_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Classement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classement entity.');
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
    * Creates a form to edit a Classement entity.
    *
    * @param Classement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Classement $entity)
    {
        $form = $this->createForm(new ClassementType(), $entity, array(
            'action' => $this->generateUrl('classement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Classement entity.
     *
     * @Route("/{id}", name="classement_update")
     * @Method("PUT")
     * @Template("AcmeChampionatBundle:Classement:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Classement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('classement_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Classement entity.
     *
     * @Route("/{id}", name="classement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeChampionatBundle:Classement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Classement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('classement'));
    }

    /**
     * Creates a form to delete a Classement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('classement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ChampionatBundle\Entity\Equipe;
use Acme\ChampionatBundle\Form\EquipeType;

/**
 * Equipe controller.
 *
 * @Route("/equipe")
 */
class EquipeController extends Controller
{

    /**
     * Lists all Equipe entities.
     *
     * @Route("/", name="equipe")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeChampionatBundle:Equipe')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Equipe entity.
     *
     * @Route("/", name="equipe_create")
     * @Method("POST")
     * @Template("AcmeChampionatBundle:Equipe:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Equipe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('equipe_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Equipe entity.
     *
     * @param Equipe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Equipe $entity)
    {
        $form = $this->createForm(new EquipeType(), $entity, array(
            'action' => $this->generateUrl('equipe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Equipe entity.
     *
     * @Route("/new", name="equipe_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Equipe();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Equipe entity.
     *
     * @Route("/{id}", name="equipe_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Equipe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Equipe entity.
     *
     * @Route("/{id}/edit", name="equipe_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Equipe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipe entity.');
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
    * Creates a form to edit a Equipe entity.
    *
    * @param Equipe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Equipe $entity)
    {
        $form = $this->createForm(new EquipeType(), $entity, array(
            'action' => $this->generateUrl('equipe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Equipe entity.
     *
     * @Route("/{id}", name="equipe_update")
     * @Method("PUT")
     * @Template("AcmeChampionatBundle:Equipe:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Equipe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('equipe_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Equipe entity.
     *
     * @Route("/{id}", name="equipe_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeChampionatBundle:Equipe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Equipe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('equipe'));
    }

    /**
     * Creates a form to delete a Equipe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('equipe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

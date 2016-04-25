<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ChampionatBundle\Entity\Ligue;
use Acme\ChampionatBundle\Form\LigueType;

/**
 * Ligue controller.
 *
 * @Route("/ligue")
 */
class LigueController extends Controller
{

    /**
     * Lists all Ligue entities.
     *
     * @Route("/", name="ligue")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeChampionatBundle:Ligue')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Ligue entity.
     *
     * @Route("/", name="ligue_create")
     * @Method("POST")
     * @Template("AcmeChampionatBundle:Ligue:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Ligue();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ligue_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Ligue entity.
     *
     * @param Ligue $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ligue $entity)
    {
        $form = $this->createForm(new LigueType(), $entity, array(
            'action' => $this->generateUrl('ligue_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ligue entity.
     *
     * @Route("/new", name="ligue_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ligue();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ligue entity.
     *
     * @Route("/{id}", name="ligue_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Ligue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ligue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ligue entity.
     *
     * @Route("/{id}/edit", name="ligue_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Ligue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ligue entity.');
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
    * Creates a form to edit a Ligue entity.
    *
    * @param Ligue $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ligue $entity)
    {
        $form = $this->createForm(new LigueType(), $entity, array(
            'action' => $this->generateUrl('ligue_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ligue entity.
     *
     * @Route("/{id}", name="ligue_update")
     * @Method("PUT")
     * @Template("AcmeChampionatBundle:Ligue:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Ligue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ligue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ligue_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Ligue entity.
     *
     * @Route("/{id}", name="ligue_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeChampionatBundle:Ligue')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ligue entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ligue'));
    }

    /**
     * Creates a form to delete a Ligue entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ligue_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

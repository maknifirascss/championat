<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ChampionatBundle\Entity\Saison;
use Acme\ChampionatBundle\Form\SaisonType;

/**
 * Saison controller.
 *
 * @Route("/saison")
 */
class SaisonController extends Controller {

    /**
     * Lists all Saison entities.
     *
     * @Route("/", name="saison")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeChampionatBundle:Saison')->findAll();

        $entities2 = $em->getRepository('AcmeChampionatBundle:Ligue')->find(1);

        $request = Request::createFromGlobals();
        
        $idJourneeUrl = $request->query->get('ligue');

        if(isset($idJourneeUrl)){
            $id = $em->getRepository('AcmeChampionatBundle:Ligue')->find($idJourneeUrl);
        }
        else{
            $id = $em->getRepository('AcmeChampionatBundle:Ligue')->findAll();
        }


        return array(
            'entities' => $entities,
            'entities2' => $entities2,
            'id' => $id,
        );
    }

    /**
     * Creates a new Saison entity.
     *
     * @Route("/", name="saison_create")
     * @Method("POST")
     * @Template("AcmeChampionatBundle:Saison:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Saison();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('saison_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Saison entity.
     *
     * @param Saison $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Saison $entity) {
        $form = $this->createForm(new SaisonType(), $entity, array(
            'action' => $this->generateUrl('saison_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Saison entity.
     *
     * @Route("/new", name="saison_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Saison();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Saison entity.
     *
     * @Route("/{id}", name="saison_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Saison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Saison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Saison entity.
     *
     * @Route("/{id}/edit", name="saison_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Saison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Saison entity.');
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
     * Creates a form to edit a Saison entity.
     *
     * @param Saison $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Saison $entity) {
        $form = $this->createForm(new SaisonType(), $entity, array(
            'action' => $this->generateUrl('saison_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Saison entity.
     *
     * @Route("/{id}", name="saison_update")
     * @Method("PUT")
     * @Template("AcmeChampionatBundle:Saison:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Saison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Saison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('saison_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Saison entity.
     *
     * @Route("/{id}", name="saison_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeChampionatBundle:Saison')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Saison entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('saison'));
    }

    /**
     * Creates a form to delete a Saison entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('saison_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}

<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ChampionatBundle\Entity\Matche;
use Acme\ChampionatBundle\Form\MatcheType;

/**
 * Matche controller.
 *
 * @Route("/matche")
 */
class MatcheController extends Controller {

    /**
     * Lists all Matche entities.
     *
     * @Route("/", name="matche")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $request = Request::createFromGlobals();

        $em = $this->getDoctrine()->getManager();
        $idSaison = $request->query->get('saison');
        $entities = $em->getRepository('AcmeChampionatBundle:Matche')->findAll();

        $entities2 = $em->getRepository('AcmeChampionatBundle:Contrat')->findAll();
        $entities1 = $em->getRepository('AcmeChampionatBundle:Butmarque')->findAll();



        $entitiesjournee = $em->getRepository('AcmeChampionatBundle:Journee')->findAll();
        $entityLigue = $em->getRepository('AcmeChampionatBundle:Ligue')->find(1);
        $entity3 = $em->getRepository('AcmeChampionatBundle:Saison')->find(1);
        $entityAllEquipe = $em->getRepository('AcmeChampionatBundle:Equipe')->findAll();
        $request = Request::createFromGlobals();

        if (isset($idSaison)) {
            $entitiesjournee = $em->getRepository('AcmeChampionatBundle:Journee')->find($idSaison);
        } else {
            $entitiesjournee = $em->getRepository('AcmeChampionatBundle:Journee')->findAll();
        }

        $entityLigue = $em->getRepository('AcmeChampionatBundle:Ligue')->find(1);
        $entity3 = $em->getRepository('AcmeChampionatBundle:Saison')->find(1);
        $entityAllEquipe = $em->getRepository('AcmeChampionatBundle:Equipe')->findAll();


        $idJourneeUrl = $request->query->get('journee');





        $result = $em->createQueryBuilder();
        $dqlj = $result->select('m.id')
                ->from('AcmeChampionatBundle:Matche', 'm')
                ->from('AcmeChampionatBundle:Journee', 'j')
                ->setParameter('idUrl', $idJourneeUrl)
                ->where('m.idJournee=:idUrl')
                ->andWhere('j.id=m.idJournee')
                ->getQuery()
                ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $dateDebJournee = $result->select('DISTINCT journee.dateDebut')
                ->from('AcmeChampionatBundle:Matche', 'match')
                ->from('AcmeChampionatBundle:Journee', 'journee')
                ->setParameter('idUrl', $idJourneeUrl)
                ->where('match.idJournee=:idUrl')
                ->andWhere('journee.id=match.idJournee')
                ->getQuery()
                ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);


        $dateFinJournee = $result->select('DISTINCT journee1.dateFin')
                ->from('AcmeChampionatBundle:Matche', 'match1')
                ->from('AcmeChampionatBundle:Journee', 'journee1')
                ->setParameter('idUrl', $idJourneeUrl)
                ->where('match1.idJournee=:idUrl')
                ->andWhere('journee1.id=match1.idJournee')
                ->getQuery()
                ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);




        return array(
            'entities' => $entities,
            'entityLigue' => $entityLigue,
            'entity3' => $entity3,
            'entity4' => $entityAllEquipe,
            'listeMatcheJournee' => $dqlj,
            'libellejournne' => $entitiesjournee,
            'urlidjournee' => $idJourneeUrl,
            'dateDebJournee' => $dateDebJournee,
            'dateFinJournee' => $dateFinJournee,
            'entities1' => $entities1,
            'entities2' => $entities2,
                //   'resultat' => $nombre,
        );
    }

    /**
     * Creates a new Matche entity.
     *
     * @Route("/", name="matche_create")
     * @Method("POST")
     * @Template("AcmeChampionatBundle:Matche:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Matche();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('matche_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Matche entity.
     *
     * @param Matche $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Matche $entity) {
        $form = $this->createForm(new MatcheType(), $entity, array(
            'action' => $this->generateUrl('matche_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Matche entity.
     *
     * @Route("/new", name="matche_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Matche();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Matche entity.
     *
     * @Route("/{id}", name="matche_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Matche')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matche entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Matche entity.
     *
     * @Route("/{id}/edit", name="matche_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Matche')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matche entity.');
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
     * Creates a form to edit a Matche entity.
     *
     * @param Matche $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Matche $entity) {
        $form = $this->createForm(new MatcheType(), $entity, array(
            'action' => $this->generateUrl('matche_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Matche entity.
     *
     * @Route("/{id}", name="matche_update")
     * @Method("PUT")
     * @Template("AcmeChampionatBundle:Matche:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeChampionatBundle:Matche')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matche entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('matche_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Matche entity.
     *
     * @Route("/{id}", name="matche_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeChampionatBundle:Matche')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Matche entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('matche'));
    }

    /**
     * Creates a form to delete a Matche entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('matche_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}

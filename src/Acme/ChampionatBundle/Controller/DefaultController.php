<?php

namespace Acme\ChampionatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller {

    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AcmeChampionatBundle:Classement')->findAll();
        $entity4 = $em->getRepository('AcmeChampionatBundle:Equipe')->findAll();

        $entitiesmatche = $em->getRepository('AcmeChampionatBundle:Matche')->findAll();

        $result = $em->createQueryBuilder();
        $dqlj = $result->select('m.id')
                ->from('AcmeChampionatBundle:Matche', 'm')
                ->from('AcmeChampionatBundle:Journee', 'j')
                ->where('j.id=1')
                ->getQuery()
                ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

      
        return array(
            'entity4' => $entity4,
            'entities' => $entities,
            'matche' => $entitiesmatche,
            'listeMatcheJournee' => $dqlj,
           
        );
    }

}

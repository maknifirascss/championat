<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/butmarque')) {
            // butmarque
            if (rtrim($pathinfo, '/') === '/butmarque') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_butmarque;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'butmarque');
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::indexAction',  '_route' => 'butmarque',);
            }
            not_butmarque:

            // butmarque_create
            if ($pathinfo === '/butmarque/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_butmarque_create;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::createAction',  '_route' => 'butmarque_create',);
            }
            not_butmarque_create:

            // butmarque_new
            if ($pathinfo === '/butmarque/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_butmarque_new;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::newAction',  '_route' => 'butmarque_new',);
            }
            not_butmarque_new:

            // butmarque_show
            if (preg_match('#^/butmarque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_butmarque_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'butmarque_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::showAction',));
            }
            not_butmarque_show:

            // butmarque_edit
            if (preg_match('#^/butmarque/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_butmarque_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'butmarque_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::editAction',));
            }
            not_butmarque_edit:

            // butmarque_update
            if (preg_match('#^/butmarque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_butmarque_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'butmarque_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::updateAction',));
            }
            not_butmarque_update:

            // butmarque_delete
            if (preg_match('#^/butmarque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_butmarque_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'butmarque_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::deleteAction',));
            }
            not_butmarque_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/classement')) {
                // classement
                if (rtrim($pathinfo, '/') === '/classement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_classement;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'classement');
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::indexAction',  '_route' => 'classement',);
                }
                not_classement:

                // classement_create
                if ($pathinfo === '/classement/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_classement_create;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::createAction',  '_route' => 'classement_create',);
                }
                not_classement_create:

                // classement_new
                if ($pathinfo === '/classement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_classement_new;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::newAction',  '_route' => 'classement_new',);
                }
                not_classement_new:

                // classement_show
                if (preg_match('#^/classement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_classement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classement_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::showAction',));
                }
                not_classement_show:

                // classement_edit
                if (preg_match('#^/classement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_classement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classement_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::editAction',));
                }
                not_classement_edit:

                // classement_update
                if (preg_match('#^/classement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_classement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classement_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::updateAction',));
                }
                not_classement_update:

                // classement_delete
                if (preg_match('#^/classement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_classement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classement_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::deleteAction',));
                }
                not_classement_delete:

            }

            if (0 === strpos($pathinfo, '/contrat')) {
                // contrat
                if (rtrim($pathinfo, '/') === '/contrat') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contrat;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contrat');
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::indexAction',  '_route' => 'contrat',);
                }
                not_contrat:

                // contrat_create
                if ($pathinfo === '/contrat/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contrat_create;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::createAction',  '_route' => 'contrat_create',);
                }
                not_contrat_create:

                // contrat_new
                if ($pathinfo === '/contrat/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contrat_new;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::newAction',  '_route' => 'contrat_new',);
                }
                not_contrat_new:

                // contrat_show
                if (preg_match('#^/contrat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contrat_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::showAction',));
                }
                not_contrat_show:

                // contrat_edit
                if (preg_match('#^/contrat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contrat_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::editAction',));
                }
                not_contrat_edit:

                // contrat_update
                if (preg_match('#^/contrat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_contrat_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::updateAction',));
                }
                not_contrat_update:

                // contrat_delete
                if (preg_match('#^/contrat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_contrat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::deleteAction',));
                }
                not_contrat_delete:

            }

        }

        // acme_championat_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_championat_default_index')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/equipe')) {
            // equipe
            if (rtrim($pathinfo, '/') === '/equipe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'equipe');
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::indexAction',  '_route' => 'equipe',);
            }
            not_equipe:

            // equipe_create
            if ($pathinfo === '/equipe/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_equipe_create;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::createAction',  '_route' => 'equipe_create',);
            }
            not_equipe_create:

            // equipe_new
            if ($pathinfo === '/equipe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe_new;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::newAction',  '_route' => 'equipe_new',);
            }
            not_equipe_new:

            // equipe_show
            if (preg_match('#^/equipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::showAction',));
            }
            not_equipe_show:

            // equipe_edit
            if (preg_match('#^/equipe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::editAction',));
            }
            not_equipe_edit:

            // equipe_update
            if (preg_match('#^/equipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_equipe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::updateAction',));
            }
            not_equipe_update:

            // equipe_delete
            if (preg_match('#^/equipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_equipe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::deleteAction',));
            }
            not_equipe_delete:

        }

        if (0 === strpos($pathinfo, '/jou')) {
            if (0 === strpos($pathinfo, '/joueur')) {
                // joueur
                if (rtrim($pathinfo, '/') === '/joueur') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_joueur;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'joueur');
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::indexAction',  '_route' => 'joueur',);
                }
                not_joueur:

                // joueur_create
                if ($pathinfo === '/joueur/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_joueur_create;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::createAction',  '_route' => 'joueur_create',);
                }
                not_joueur_create:

                // joueur_new
                if ($pathinfo === '/joueur/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_joueur_new;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::newAction',  '_route' => 'joueur_new',);
                }
                not_joueur_new:

                // joueur_show
                if (preg_match('#^/joueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_joueur_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::showAction',));
                }
                not_joueur_show:

                // joueur_edit
                if (preg_match('#^/joueur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_joueur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::editAction',));
                }
                not_joueur_edit:

                // joueur_update
                if (preg_match('#^/joueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_joueur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::updateAction',));
                }
                not_joueur_update:

                // joueur_delete
                if (preg_match('#^/joueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_joueur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::deleteAction',));
                }
                not_joueur_delete:

            }

            if (0 === strpos($pathinfo, '/journee')) {
                // journee
                if (rtrim($pathinfo, '/') === '/journee') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_journee;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'journee');
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::indexAction',  '_route' => 'journee',);
                }
                not_journee:

                // journee_create
                if ($pathinfo === '/journee/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_journee_create;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::createAction',  '_route' => 'journee_create',);
                }
                not_journee_create:

                // journee_new
                if ($pathinfo === '/journee/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_journee_new;
                    }

                    return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::newAction',  '_route' => 'journee_new',);
                }
                not_journee_new:

                // journee_show
                if (preg_match('#^/journee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_journee_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'journee_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::showAction',));
                }
                not_journee_show:

                // journee_edit
                if (preg_match('#^/journee/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_journee_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'journee_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::editAction',));
                }
                not_journee_edit:

                // journee_update
                if (preg_match('#^/journee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_journee_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'journee_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::updateAction',));
                }
                not_journee_update:

                // journee_delete
                if (preg_match('#^/journee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_journee_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'journee_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::deleteAction',));
                }
                not_journee_delete:

            }

        }

        if (0 === strpos($pathinfo, '/ligue')) {
            // ligue
            if (rtrim($pathinfo, '/') === '/ligue') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ligue;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ligue');
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::indexAction',  '_route' => 'ligue',);
            }
            not_ligue:

            // ligue_create
            if ($pathinfo === '/ligue/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ligue_create;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::createAction',  '_route' => 'ligue_create',);
            }
            not_ligue_create:

            // ligue_new
            if ($pathinfo === '/ligue/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ligue_new;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::newAction',  '_route' => 'ligue_new',);
            }
            not_ligue_new:

            // ligue_show
            if (preg_match('#^/ligue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ligue_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligue_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::showAction',));
            }
            not_ligue_show:

            // ligue_edit
            if (preg_match('#^/ligue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ligue_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligue_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::editAction',));
            }
            not_ligue_edit:

            // ligue_update
            if (preg_match('#^/ligue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_ligue_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligue_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::updateAction',));
            }
            not_ligue_update:

            // ligue_delete
            if (preg_match('#^/ligue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ligue_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ligue_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::deleteAction',));
            }
            not_ligue_delete:

        }

        if (0 === strpos($pathinfo, '/matche')) {
            // matche
            if (rtrim($pathinfo, '/') === '/matche') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matche;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'matche');
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::indexAction',  '_route' => 'matche',);
            }
            not_matche:

            // matche_create
            if ($pathinfo === '/matche/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_matche_create;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::createAction',  '_route' => 'matche_create',);
            }
            not_matche_create:

            // matche_new
            if ($pathinfo === '/matche/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matche_new;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::newAction',  '_route' => 'matche_new',);
            }
            not_matche_new:

            // matche_show
            if (preg_match('#^/matche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matche_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matche_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::showAction',));
            }
            not_matche_show:

            // matche_edit
            if (preg_match('#^/matche/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_matche_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matche_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::editAction',));
            }
            not_matche_edit:

            // matche_update
            if (preg_match('#^/matche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_matche_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matche_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::updateAction',));
            }
            not_matche_update:

            // matche_delete
            if (preg_match('#^/matche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_matche_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matche_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::deleteAction',));
            }
            not_matche_delete:

        }

        if (0 === strpos($pathinfo, '/saison')) {
            // saison
            if (rtrim($pathinfo, '/') === '/saison') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_saison;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'saison');
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::indexAction',  '_route' => 'saison',);
            }
            not_saison:

            // saison_create
            if ($pathinfo === '/saison/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_saison_create;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::createAction',  '_route' => 'saison_create',);
            }
            not_saison_create:

            // saison_new
            if ($pathinfo === '/saison/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_saison_new;
                }

                return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::newAction',  '_route' => 'saison_new',);
            }
            not_saison_new:

            // saison_show
            if (preg_match('#^/saison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_saison_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_show')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::showAction',));
            }
            not_saison_show:

            // saison_edit
            if (preg_match('#^/saison/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_saison_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_edit')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::editAction',));
            }
            not_saison_edit:

            // saison_update
            if (preg_match('#^/saison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_saison_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_update')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::updateAction',));
            }
            not_saison_update:

            // saison_delete
            if (preg_match('#^/saison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_saison_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_delete')), array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::deleteAction',));
            }
            not_saison_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

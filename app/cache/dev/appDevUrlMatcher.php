<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Acme\\ChampionatBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

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

        if (0 === strpos($pathinfo, '/Backend')) {
            // backend_medecin_homepage
            if (0 === strpos($pathinfo, '/Backend/hello') && preg_match('#^/Backend/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_medecin_homepage')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/Backend/allergie')) {
                // allergie
                if (rtrim($pathinfo, '/') === '/Backend/allergie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_allergie;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'allergie');
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\AllergieController::indexAction',  '_route' => 'allergie',);
                }
                not_allergie:

                // allergie_show
                if (preg_match('#^/Backend/allergie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_allergie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'allergie_show')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\AllergieController::showAction',));
                }
                not_allergie_show:

                // allergie_edit
                if (preg_match('#^/Backend/allergie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_allergie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'allergie_edit')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\AllergieController::editAction',));
                }
                not_allergie_edit:

                // allergie_update
                if (preg_match('#^/Backend/allergie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_allergie_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'allergie_update')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\AllergieController::updateAction',));
                }
                not_allergie_update:

            }

            if (0 === strpos($pathinfo, '/Backend/dossiermedical')) {
                // dossiermedical
                if (rtrim($pathinfo, '/') === '/Backend/dossiermedical') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dossiermedical;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dossiermedical');
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::indexAction',  '_route' => 'dossiermedical',);
                }
                not_dossiermedical:

                // dossiermedical_create
                if ($pathinfo === '/Backend/dossiermedical/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dossiermedical_create;
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::createAction',  '_route' => 'dossiermedical_create',);
                }
                not_dossiermedical_create:

                // dossiermedical_new
                if ($pathinfo === '/Backend/dossiermedical/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dossiermedical_new;
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::newAction',  '_route' => 'dossiermedical_new',);
                }
                not_dossiermedical_new:

                // dossiermedical_show
                if (preg_match('#^/Backend/dossiermedical/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dossiermedical_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_show')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::showAction',));
                }
                not_dossiermedical_show:

                // dossiermedical_edit
                if (preg_match('#^/Backend/dossiermedical/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dossiermedical_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_edit')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::editAction',));
                }
                not_dossiermedical_edit:

                // dossiermedical_update
                if (preg_match('#^/Backend/dossiermedical/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_dossiermedical_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_update')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::updateAction',));
                }
                not_dossiermedical_update:

                // dossiermedical_delete
                if (preg_match('#^/Backend/dossiermedical/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_dossiermedical_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_delete')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::deleteAction',));
                }
                not_dossiermedical_delete:

            }

            if (0 === strpos($pathinfo, '/Backend/intervention')) {
                // intervention
                if (rtrim($pathinfo, '/') === '/Backend/intervention') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_intervention;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'intervention');
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\InterventionController::indexAction',  '_route' => 'intervention',);
                }
                not_intervention:

                // intervention_create
                if ($pathinfo === '/Backend/intervention/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_intervention_create;
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\InterventionController::createAction',  '_route' => 'intervention_create',);
                }
                not_intervention_create:

                // intervention_new
                if ($pathinfo === '/Backend/intervention/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_intervention_new;
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\InterventionController::newAction',  '_route' => 'intervention_new',);
                }
                not_intervention_new:

                // intervention_show
                if (preg_match('#^/Backend/intervention/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_intervention_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_show')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\InterventionController::showAction',));
                }
                not_intervention_show:

                // intervention_edit
                if (preg_match('#^/Backend/intervention/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_intervention_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_edit')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\InterventionController::editAction',));
                }
                not_intervention_edit:

            }

            if (0 === strpos($pathinfo, '/Backend/maladie')) {
                // maladie
                if (rtrim($pathinfo, '/') === '/Backend/maladie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maladie;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'maladie');
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\MaladieController::indexAction',  '_route' => 'maladie',);
                }
                not_maladie:

                // maladie_new
                if ($pathinfo === '/Backend/maladie/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maladie_new;
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\MaladieController::newAction',  '_route' => 'maladie_new',);
                }
                not_maladie_new:

                // maladie_show
                if (preg_match('#^/Backend/maladie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maladie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'maladie_show')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\MaladieController::showAction',));
                }
                not_maladie_show:

                // maladie_edit
                if (preg_match('#^/Backend/maladie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_maladie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'maladie_edit')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\MaladieController::editAction',));
                }
                not_maladie_edit:

                // maladie_update
                if (preg_match('#^/Backend/maladie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_maladie_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'maladie_update')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\MaladieController::updateAction',));
                }
                not_maladie_update:

            }

            if (0 === strpos($pathinfo, '/Backend/o')) {
                if (0 === strpos($pathinfo, '/Backend/observation')) {
                    // observation
                    if (rtrim($pathinfo, '/') === '/Backend/observation') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_observation;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'observation');
                        }

                        return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\ObservationController::indexAction',  '_route' => 'observation',);
                    }
                    not_observation:

                    // observation_show
                    if (preg_match('#^/Backend/observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_observation_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'observation_show')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\ObservationController::showAction',));
                    }
                    not_observation_show:

                    // observation_edit
                    if (preg_match('#^/Backend/observation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_observation_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'observation_edit')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\ObservationController::editAction',));
                    }
                    not_observation_edit:

                    // observation_update
                    if (preg_match('#^/Backend/observation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_observation_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'observation_update')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\ObservationController::updateAction',));
                    }
                    not_observation_update:

                }

                if (0 === strpos($pathinfo, '/Backend/ordonnance')) {
                    // ordonnance
                    if (rtrim($pathinfo, '/') === '/Backend/ordonnance') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ordonnance;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'ordonnance');
                        }

                        return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\OrdonnanceController::indexAction',  '_route' => 'ordonnance',);
                    }
                    not_ordonnance:

                    // ordonnance_create
                    if ($pathinfo === '/Backend/ordonnance/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ordonnance_create;
                        }

                        return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\OrdonnanceController::createAction',  '_route' => 'ordonnance_create',);
                    }
                    not_ordonnance_create:

                    // ordonnance_new
                    if ($pathinfo === '/Backend/ordonnance/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ordonnance_new;
                        }

                        return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\OrdonnanceController::newAction',  '_route' => 'ordonnance_new',);
                    }
                    not_ordonnance_new:

                    // ordonnance_show
                    if (preg_match('#^/Backend/ordonnance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ordonnance_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_show')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\OrdonnanceController::showAction',));
                    }
                    not_ordonnance_show:

                    // ordonnance_edit
                    if (preg_match('#^/Backend/ordonnance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ordonnance_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_edit')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\OrdonnanceController::editAction',));
                    }
                    not_ordonnance_edit:

                    // ordonnance_update
                    if (preg_match('#^/Backend/ordonnance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_ordonnance_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_update')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\OrdonnanceController::updateAction',));
                    }
                    not_ordonnance_update:

                    // ordonnance_delete
                    if (preg_match('#^/Backend/ordonnance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ordonnance_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_delete')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\OrdonnanceController::deleteAction',));
                    }
                    not_ordonnance_delete:

                }

            }

            if (0 === strpos($pathinfo, '/Backend/traitement')) {
                // traitement
                if (rtrim($pathinfo, '/') === '/Backend/traitement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_traitement;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'traitement');
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::indexAction',  '_route' => 'traitement',);
                }
                not_traitement:

                // traitement_create
                if ($pathinfo === '/Backend/traitement/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_traitement_create;
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::createAction',  '_route' => 'traitement_create',);
                }
                not_traitement_create:

                // traitement_new
                if ($pathinfo === '/Backend/traitement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_traitement_new;
                    }

                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::newAction',  '_route' => 'traitement_new',);
                }
                not_traitement_new:

                // traitement_show
                if (preg_match('#^/Backend/traitement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_traitement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'traitement_show')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::showAction',));
                }
                not_traitement_show:

                // traitement_edit
                if (preg_match('#^/Backend/traitement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_traitement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'traitement_edit')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::editAction',));
                }
                not_traitement_edit:

                // traitement_update
                if (preg_match('#^/Backend/traitement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_traitement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'traitement_update')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::updateAction',));
                }
                not_traitement_update:

            }

            // backend_hospital_affichedossiermedical
            if ($pathinfo === '/Backend/affiche') {
                return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::indexAction',  '_route' => 'backend_hospital_affichedossiermedical',);
            }

            if (0 === strpos($pathinfo, '/Backend/d')) {
                // backend_hospital_dossiermedical
                if (0 === strpos($pathinfo, '/Backend/dossiermedical') && preg_match('#^/Backend/dossiermedical/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_dossiermedical')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::showAction',));
                }

                // backend_hospital_deleteintervention
                if (0 === strpos($pathinfo, '/Backend/deleteIntervention') && preg_match('#^/Backend/deleteIntervention/(?P<id>[^/]++)/(?P<idm>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_deleteintervention')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\InterventionController::delete2Action',));
                }

            }

            if (0 === strpos($pathinfo, '/Backend/a')) {
                // backend_hospital_ajoutintervention
                if (0 === strpos($pathinfo, '/Backend/ajoutIntervention') && preg_match('#^/Backend/ajoutIntervention/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_ajoutintervention')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\InterventionController::ajoutAction',));
                }

                // backend_medecin_ajoutallergie
                if (0 === strpos($pathinfo, '/Backend/addAllergies') && preg_match('#^/Backend/addAllergies/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_medecin_ajoutallergie')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\AllergieController::ajoutAction',));
                }

            }

            // backend_hospital_deleteAllergie
            if (0 === strpos($pathinfo, '/Backend/SuppAllergies') && preg_match('#^/Backend/SuppAllergies/(?P<id>[^/]++)/(?P<idm>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_deleteAllergie')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\AllergieController::deleteAction',));
            }

            // backend_medecin_ajoutobservation
            if (0 === strpos($pathinfo, '/Backend/addObservation') && preg_match('#^/Backend/addObservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_medecin_ajoutobservation')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\ObservationController::ajoutAction',));
            }

            // backend_hospital_deleteObservation
            if (0 === strpos($pathinfo, '/Backend/SuppObservation') && preg_match('#^/Backend/SuppObservation/(?P<id>[^/]++)/(?P<idm>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_deleteObservation')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\ObservationController::deleteAction',));
            }

            // backend_medecin_ajoutMaladie
            if (0 === strpos($pathinfo, '/Backend/addMaladie') && preg_match('#^/Backend/addMaladie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_medecin_ajoutMaladie')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\MaladieController::ajoutAction',));
            }

            // backend_hospital_deleteMaladie
            if (0 === strpos($pathinfo, '/Backend/SuppMaladie') && preg_match('#^/Backend/SuppMaladie/(?P<id>[^/]++)/(?P<idm>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_deleteMaladie')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\MaladieController::deleteAction',));
            }

            // backend_medecin_ajoutTraitement
            if (0 === strpos($pathinfo, '/Backend/addTraitement') && preg_match('#^/Backend/addTraitement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_medecin_ajoutTraitement')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::ajoutAction',));
            }

            // backend_hospital_deleteTraitement
            if (0 === strpos($pathinfo, '/Backend/SuppTraitement') && preg_match('#^/Backend/SuppTraitement/(?P<id>[^/]++)/(?P<idm>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_deleteTraitement')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\TraitementController::deleteAction',));
            }

            // backend_hospital_printdossier
            if (0 === strpos($pathinfo, '/Backend/printpdf') && preg_match('#^/Backend/printpdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_hospital_printdossier')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\DossierMedicalController::printAction',));
            }

            if (0 === strpos($pathinfo, '/Backend/envoyer')) {
                // envoyernewmsgpat
                if ($pathinfo === '/Backend/envoyernewmsgtopat') {
                    return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\messagepatientController::envoyernewmsgtopatAction',  '_route' => 'envoyernewmsgpat',);
                }

                // envoyermsgpat
                if (0 === strpos($pathinfo, '/Backend/envoyermsgpat') && preg_match('#^/Backend/envoyermsgpat/(?P<id2>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'envoyermsgpat')), array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\messagepatientController::envoyermsgtopatAction',));
                }

            }

            // listmsgmed
            if ($pathinfo === '/Backend/listmsgmed') {
                return array (  '_controller' => 'Backend\\MedecinBundle\\Controller\\messageMedController::affichermsgmedAction',  '_route' => 'listmsgmed',);
            }

        }

        if (0 === strpos($pathinfo, '/Hopital')) {
            // sticky_bit_hospital_homepage
            if (0 === strpos($pathinfo, '/Hopital/hello') && preg_match('#^/Hopital/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sticky_bit_hospital_homepage')), array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/Hopital/envoyer')) {
                // envoyernewmsgMed
                if ($pathinfo === '/Hopital/envoyernewmsgtoMed') {
                    return array (  '_controller' => 'StickyBitHospitalBundle:messageMed:envoyernewmsgtoMed',  '_route' => 'envoyernewmsgMed',);
                }

                // envoyermsgmed
                if (0 === strpos($pathinfo, '/Hopital/envoyermsgmed') && preg_match('#^/Hopital/envoyermsgmed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'envoyermsgmed')), array (  '_controller' => 'StickyBitHospitalBundle:messageMed:envoyermsgtoMed',));
                }

            }

            // listmsgpat
            if ($pathinfo === '/Hopital/listmsgpat') {
                return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\messagepatientController::affichermsgAction',  '_route' => 'listmsgpat',);
            }

            // authentification
            if ($pathinfo === '/Hopital/authentification') {
                return array (  '_controller' => 'StickyBitHospitalBundle:patient:authentification',  '_route' => 'authentification',);
            }

            if (0 === strpos($pathinfo, '/Hopital/list')) {
                // listservice
                if ($pathinfo === '/Hopital/listservice') {
                    return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\serviceController::listserviceAction',  '_route' => 'listservice',);
                }

                // listmedecin
                if ($pathinfo === '/Hopital/listmedecin') {
                    return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\serviceController::listmedAction',  '_route' => 'listmedecin',);
                }

            }

            if (0 === strpos($pathinfo, '/Hopital/home')) {
                // homemed
                if ($pathinfo === '/Hopital/homemed') {
                    return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\messagepatientController::afficherhomeAction',  '_route' => 'homemed',);
                }

                // home
                if ($pathinfo === '/Hopital/home') {
                    return array (  '_controller' => 'StickyBitHospitalBundle:messagemed:afficherhomemed',  '_route' => 'home',);
                }

            }

            // listrdv
            if ($pathinfo === '/Hopital/listrdv') {
                return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\RdvController::listrdvAction',  '_route' => 'listrdv',);
            }

            // updaterdv
            if (0 === strpos($pathinfo, '/Hopital/updaterdv') && preg_match('#^/Hopital/updaterdv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updaterdv')), array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\RdvController::updateAction',));
            }

            // sup
            if (0 === strpos($pathinfo, '/Hopital/sup') && preg_match('#^/Hopital/sup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sup')), array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\RdvController::supAction',));
            }

            // add
            if ($pathinfo === '/Hopital/add') {
                return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\RdvController::addAction',  '_route' => 'add',);
            }

            // list
            if ($pathinfo === '/Hopital/list') {
                return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\RdvController::listAction',  '_route' => 'list',);
            }

            // sticky_bit_hospital_affichage
            if (0 === strpos($pathinfo, '/Hopital/affichageFact') && preg_match('#^/Hopital/affichageFact/(?P<idPatient>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sticky_bit_hospital_affichage')), array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\DossierAdministratifController::indexAction',));
            }

            // sticky_bit_hospital_ligne
            if (0 === strpos($pathinfo, '/Hopital/ligneFact') && preg_match('#^/Hopital/ligneFact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sticky_bit_hospital_ligne')), array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\DossierAdministratifController::ligneAction',));
            }

            if (0 === strpos($pathinfo, '/Hopital/Pdf')) {
                // sticky_bit_hospital_pdf_dos
                if ($pathinfo === '/Hopital/PdfDos') {
                    return array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\DossierAdministratifController::generatePdfdossierAction',  '_route' => 'sticky_bit_hospital_pdf_dos',);
                }

                // sticky_bit_hospital_pdf
                if (0 === strpos($pathinfo, '/Hopital/PdfFact') && preg_match('#^/Hopital/PdfFact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sticky_bit_hospital_pdf')), array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\DossierAdministratifController::generatePdfAction',));
                }

                // sticky_bit_hospital_pdf_hos
                if (0 === strpos($pathinfo, '/Hopital/PdfHos') && preg_match('#^/Hopital/PdfHos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sticky_bit_hospital_pdf_hos')), array (  '_controller' => 'StickyBit\\HospitalBundle\\Controller\\DossierAdministratifController::generatePdfHosAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
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

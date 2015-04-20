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

        if (0 === strpos($pathinfo, '/skill')) {
            // skill
            if (rtrim($pathinfo, '/') === '/skill') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_skill;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'skill');
                }

                return array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\SkillController::indexAction',  '_route' => 'skill',);
            }
            not_skill:

            // skill_create
            if ($pathinfo === '/skill/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_skill_create;
                }

                return array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\SkillController::createAction',  '_route' => 'skill_create',);
            }
            not_skill_create:

            // skill_new
            if ($pathinfo === '/skill/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_skill_new;
                }

                return array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\SkillController::newAction',  '_route' => 'skill_new',);
            }
            not_skill_new:

            // skill_show
            if (preg_match('#^/skill/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_skill_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'skill_show')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\SkillController::showAction',));
            }
            not_skill_show:

            // skill_edit
            if (preg_match('#^/skill/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_skill_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'skill_edit')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\SkillController::editAction',));
            }
            not_skill_edit:

            // skill_update
            if (preg_match('#^/skill/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_skill_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'skill_update')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\SkillController::updateAction',));
            }
            not_skill_update:

            // skill_delete
            if (preg_match('#^/skill/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_skill_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'skill_delete')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\SkillController::deleteAction',));
            }
            not_skill_delete:

        }

        if (0 === strpos($pathinfo, '/offer')) {
            // offer
            if (rtrim($pathinfo, '/') === '/offer') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offer;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'offer');
                }

                return array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\OfferController::indexAction',  '_route' => 'offer',);
            }
            not_offer:

            // offer_create
            if ($pathinfo === '/offer/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offer_create;
                }

                return array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\OfferController::createAction',  '_route' => 'offer_create',);
            }
            not_offer_create:

            // offer_new
            if ($pathinfo === '/offer/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offer_new;
                }

                return array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\OfferController::newAction',  '_route' => 'offer_new',);
            }
            not_offer_new:

            // offer_show
            if (preg_match('#^/offer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offer_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_show')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\OfferController::showAction',));
            }
            not_offer_show:

            // offer_edit
            if (preg_match('#^/offer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_offer_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_edit')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\OfferController::editAction',));
            }
            not_offer_edit:

            // offer_update
            if (preg_match('#^/offer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_offer_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_update')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\OfferController::updateAction',));
            }
            not_offer_update:

            // offer_delete
            if (preg_match('#^/offer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_offer_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offer_delete')), array (  '_controller' => 'VendorProjet\\imieBundle\\Controller\\OfferController::deleteAction',));
            }
            not_offer_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

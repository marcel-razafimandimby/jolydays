<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/annonce')) {
            if (0 === strpos($pathinfo, '/annonce/categorie')) {
                // annonce_categorie_index
                if ('/annonce/categorie' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CategorieController::indexAction',  '_route' => 'annonce_categorie_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_annonce_categorie_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'annonce_categorie_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_annonce_categorie_index;
                    }

                    return $ret;
                }
                not_annonce_categorie_index:

                // annonce_categorie_show
                if (preg_match('#^/annonce/categorie/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_categorie_show')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_annonce_categorie_show;
                    }

                    return $ret;
                }
                not_annonce_categorie_show:

                // annonce_categorie_new
                if ('/annonce/categorie/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\CategorieController::newAction',  '_route' => 'annonce_categorie_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_annonce_categorie_new;
                    }

                    return $ret;
                }
                not_annonce_categorie_new:

                // annonce_categorie_edit
                if (preg_match('#^/annonce/categorie/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_categorie_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_annonce_categorie_edit;
                    }

                    return $ret;
                }
                not_annonce_categorie_edit:

                // annonce_categorie_delete
                if (preg_match('#^/annonce/categorie/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_categorie_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_annonce_categorie_delete;
                    }

                    return $ret;
                }
                not_annonce_categorie_delete:

            }

            elseif (0 === strpos($pathinfo, '/annonce/annonce')) {
                // annonce_annonce_index
                if ('/annonce/annonce' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::indexAction',  '_route' => 'annonce_annonce_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_annonce_annonce_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'annonce_annonce_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_annonce_annonce_index;
                    }

                    return $ret;
                }
                not_annonce_annonce_index:

                // annonce_annonce_show
                if (preg_match('#^/annonce/annonce/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_annonce_show')), array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_annonce_annonce_show;
                    }

                    return $ret;
                }
                not_annonce_annonce_show:

                // annonce_annonce_new
                if ('/annonce/annonce/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::newAction',  '_route' => 'annonce_annonce_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_annonce_annonce_new;
                    }

                    return $ret;
                }
                not_annonce_annonce_new:

                // annonce_annonce_edit
                if (preg_match('#^/annonce/annonce/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_annonce_edit')), array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_annonce_annonce_edit;
                    }

                    return $ret;
                }
                not_annonce_annonce_edit:

                // annonce_annonce_delete
                if (preg_match('#^/annonce/annonce/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_annonce_delete')), array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_annonce_annonce_delete;
                    }

                    return $ret;
                }
                not_annonce_annonce_delete:

            }

            // check_param_route
            if (preg_match('#^/annonce/(?P<_locale>en|fr)/(?P<year>\\d+)/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>html))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'check_param_route')), array (  '_controller' => 'AppBundle\\Controller\\AnnonceController::annonceAction',  '_format' => 'html',));
            }

            // main_fiche_annonce
            if (preg_match('#^/annonce/(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_fiche_annonce')), array (  '_controller' => 'AppBundle\\Controller\\IndexController::ficheAnnonceAction',));
            }

        }

        // main_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\IndexController::indexAction',  '_route' => 'main_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_main_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'main_homepage'));
            }

            return $ret;
        }
        not_main_homepage:

        // hello_the_world
        if ('/hello-world.html' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::helloAction',  '_route' => 'hello_the_world',);
        }

        // main_annonce_liste
        if ('/toutes-les-annonces.html' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::listAnnonceAction',  '_route' => 'main_annonce_liste',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

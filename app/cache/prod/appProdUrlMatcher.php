<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // utilisateurs_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'utilisateurs_homepage');
            }

            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\DefaultController::indexAction',  '_route' => 'utilisateurs_homepage',);
        }

        // produits
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'produits');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  '_route' => 'produits',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // presentation
            if ($pathinfo === '/produit') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',  '_route' => 'presentation',);
            }

            if (0 === strpos($pathinfo, '/pa')) {
                if (0 === strpos($pathinfo, '/panier')) {
                    // panier
                    if ($pathinfo === '/panier') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
                    }

                    // livraison
                    if ($pathinfo === '/panier/livraison') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
                    }

                    // validation
                    if ($pathinfo === '/panier/validation') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
                    }

                }

                // page
                if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PagesController::pageAction',));
                }

            }

        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TestController::ajoutAction',  '_route' => 'test',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

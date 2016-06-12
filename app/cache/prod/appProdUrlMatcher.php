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

        // produits
        if ($pathinfo === '/h') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  '_route' => 'produits',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // presentation
            if ($pathinfo === '/produit') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',  '_route' => 'presentation',);
            }

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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

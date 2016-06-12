<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'produits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/h',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'presentation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'livraison' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/livraison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

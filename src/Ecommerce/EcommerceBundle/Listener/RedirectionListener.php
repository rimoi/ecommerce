<?php
/**
 * Created by PhpStorm.
 * User: SiDi
 * Date: 23/07/2016
 * Time: 11:38
 */

namespace Ecommerce\EcommerceBundle\Listener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;


class RedirectionListener
{
    public function __construct(ContainerInterface $container, Session $session){
        $this->session = $session;
        $this->router = $container->get('router');
        $this->securityContext = $container->get('security.context');

    }

    public function onKernelRequest(GetResponseEvent $event){
        // r�cuperation de la route courante.
       $route = $event->getRequest()->attributes->get('_route');
        if($route == 'livraison' || $route == 'validation'){
            if($this->session->has('panier')){
                if(count($this->session->get('panier')) == 0)  $event->setResponse(new RedirectResponse($this->router->generate('panier')));
            }

            // v�rification si utilisateur est bien connect�
            // $this->securityContext->getToken()->getUser() permet de r�cuperer l'utilisateur courant
            if(!is_object($this->securityContext->getToken()->getUser())){
                $this->session->getFlashBag()->add('notification','Veuillez vous identifier svp');
                $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
            }
        }
    }
}


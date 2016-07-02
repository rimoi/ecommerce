<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PanierController extends Controller
{

    public function ajouterAction($id)
    {
        // faire appelle � une variable session
        $session = $this->getRequest()->getSession();

        if(!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        if(array_key_exists($id,$panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
        }   else{
                if($this->getRequest()->query->get('qte') != null)
                    $panier[$id] = $this->getRequest()->query->get('qte');
                else
                    $panier[$id]=1;
            }


        // mettre � jour notre session  panier
        $session->set('panier',$panier);

        // quand on ajoute en produit on fais une redirection vers le panier
        return $this->redirect($this->generateUrl('panier'));

    }

    public function panierAction()
    {

        $session = $this->getRequest()->getSession();
        // d�truire une session
        //$session->remove('panier');die;
        if(!$session->has('panier')) $session->set('panier',array());

        //$panier = $session->get('panier');
        //var_dump($panier);die;
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));

        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig',array('produits' =>$produits,'panier' => $session->get('panier')));
    }

    public function supprimerAction($id)
    {
        $session = $this->getRequest()->getSession();
        if(!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        // on v�rifie si l'id dans le panier existe
        if(array_key_exists($id,$panier)){
            // ici on d�truit notre variable
             unset($panier[$id]);
            // on met � jour notre panier
            $session->set('panier',$panier);
        }


        return $this->redirect($this->generateUrl('panier'));

    }
    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Default:panier/layout/livraison.html.twig');
    }
     public function validationAction()
    {
        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig');
    }


}

<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Categories;
class ProduitsController extends Controller
{


    public function produitsAction(Categories $categorie = null)
    {
        //var_dump($categorie);die;
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if($categorie != null){
            $produits = $em->getRepository('EcommerceBundle:Produits')->byCategories($categorie);
        }else{
            // récuperation de tous les produits
            $produits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));
        }

        // existance du panier
        if(!$session->has('panier'))
        {
            $panier = false;
        }else{
            $panier = $session->get('panier');
        }

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',array('produits' => $produits,'panier' => $panier));
    }


    public function presentationAction($id)
    {
        $session = $this->getRequest()->getSession();
        if(!$session->has('panier'))
        {
            $panier = false;
        }else{
            $panier = $session->get('panier');
        }

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        if(!$produit) throw $this->createNotFoundException('Aucun resultat correspond à ce produit !!! ');

        $produits = $em->getRepository('EcommerceBundle:Produits')->find($id);
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig',array('produit' => $produits,'panier' => $panier));
    }




    public function rechercheAction(){

        $form = $this->createForm(new RechercheType());

        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig',array('form' => $form->createView()));
    }

    public function rechercheTraitementAction(){

        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        $form = $this->createForm(new RechercheType());
        if($request->isMethod('POST')){
            $form->bind($request);

            $produit = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        }else{
            throw $this->createNotFoundException('Désoler Page Introuvable !!!');
        }

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produit));
    }

}

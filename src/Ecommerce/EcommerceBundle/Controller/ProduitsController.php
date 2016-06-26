<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{


    public function produitsAction()
    {

        $em = $this->getDoctrine()->getManager();
        // récuperation de tous les produits
        $produits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible' => 1));

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',array('produits' => $produits));
    }


    public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        if(!$produit) throw $this->createNotFoundException('Aucun resultat correspond à ce produit !!! ');

        $produits = $em->getRepository('EcommerceBundle:Produits')->find($id);
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig',array('produit' => $produits));
    }


    public function categoriesAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        // vérification de l'existance d'une catégories
        $categories = $em->getRepository('EcommerceBundle:Produits')->findBy(array('categorie' => $categorie));
        if(!$categories) throw $this->createNotFoundException('Aucun resultat ne correpond à cette catégorie !!! ');
        // récuperation de tous les produits
        $produits = $em->getRepository('EcommerceBundle:Produits')->byCategories($categorie);

       //


        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));

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

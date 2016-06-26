<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {

        $em = $this->getDoctrine()->getManager();
        // récuperation de tous les produits
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',array('produits' => $produits));
    }
    public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        // récuperation de tous les produits
        $produits = $em->getRepository('EcommerceBundle:Produits')->find($id);

        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig',array('produit' => $produits));
    }
    public function categoriesAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        // récuperation de tous les produits
        $produits = $em->getRepository('EcommerceBundle:Produits')->byCategories($categorie);
       //
        return $this->render('EcommerceBundle:Default:produits/layout/produit.html.twig', array('produits' => $produits));

    }
}

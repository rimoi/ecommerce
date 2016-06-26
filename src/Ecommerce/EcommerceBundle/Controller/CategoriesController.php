<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function menuAction()
    {
        // recherche de tous les catégories
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();

        return $this->render('EcommerceBundle:Default:categories/modulesUsed/menu.html.twig',array('categories' => $categories));
    }

    public function categorieAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository('EcommerceBundle:Categories')->find($id);
        if(!$categorie) throw $this->createNotFoundException('Catégories inexistante !!!');
        return $this->render('EcommerceBundle:Default:categories/layout/categorie.html.twig',array('categorie' => $categorie));


    }
}

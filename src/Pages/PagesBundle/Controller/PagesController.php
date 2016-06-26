<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function menuAction()
    {
        // recherche de tous les contenus
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PagesBundle:Pages')->findAll();

        return $this->render('PagesBundle:Default:Pages/modulesUsed/menu.html.twig',array('page' => $page));
    }

    public function pageAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $page = $em->getRepository('PagesBundle:Pages')->find($id);
        if(!$page){
             throw $this->createNotFoundException('La page que vous chercher n\'existe pas ');
        }
        return $this->render('PagesBundle:Default:Pages/layout/pages.html.twig',array('page' => $page));
    }
   
}

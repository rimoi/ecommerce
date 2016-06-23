<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\testType;


class TestController extends Controller
{

    public function testFormulaireAction()
    {
        $test = new testType();

        $form =  $this->createForm($test);
        $request = $this->get('request');
        if($request->isMethod('POST')){
            // ici nous allons injecter tous ce qu'on a récuprer par post dans la variable form
            $form->bind($request);
            //var_dump($form->getData());die;
            $form = $this->createForm($test,array('email' =>'sidi.lekhalifa@live.fr'));
            if($form->isValid()){

            }
        }
        return $this->render('EcommerceBundle:Default:test.html.twig', array('form' => $form->createView()));
    }



   /* public function ajoutAction()
    {
         $em = $this->getDoctrine()->getManager();
         
//       $produits = new Produits();
//       $produits->setCatagories('polo');
//       $produits->setDescription('Polo de marque pas cher');
//       $produits->setDisponible('1');
//       $produits->setImage('http://bit.ly/1sCzgIt');
//        $produits->setPrix('20.99 £');
//        $produits->setTva('0.98 £');
//        $produits->setNom("Polo Camel");
//        
//       $em->persist($produits);
//       
//       $produits2 = new Produits();
//       $produits2->setCatagories('t-shirt personnalisée ');
//       $produits2->setDescription('Tshirt personnalisé pas cher :) ');
//       $produits2->setDisponible('1');
//       $produits2->setImage('http://bit.ly/1sCzgIt');
//        $produits2->setPrix('15.99 £');
//        $produits2->setTva('0.99 £');
//        $produits2->setNom("polo");
//        
//       $em->persist($produits2);
//       
//       $em->flush();
//       
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        
        
        
       
        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits' => $produits));
    }*/
    
}

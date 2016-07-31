<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ecommerce\EcommerceBundle\Form\UtilisateursAdressesType;
use Symfony\Component\HttpFoundation\Response;
use Ecommerce\EcommerceBundle\Entity\Produits;
//use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class CommandesController extends Controller
{
    public function facture()
{
    $em = $this->getDoctrine()->getManager();
    $generator = $this->container->get('security.secure_random');
    $session = $this->getRequest()->getSession();
    $adresse = $session->get('adresse');
    $panier = $session->get('panier');
    $commande = array();
    $totalHT = 0;
    $totalTTC = 0;

    $facturation = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);
    $livraison = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
    $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));

    foreach($produits as $produit)
    {
        $prixHT = ($produit->getPrix() * $panier[$produit->getId()]);
        $prixTTC = ($produit->getPrix() * $panier[$produit->getId()] / $produit->getTva()->getMultiplicate());
        $totalHT += $prixHT;
        $totalTTC += $prixTTC;

        if (!isset($commande['tva']['%'.$produit->getTva()->getValeur()]))
            $commande['tva']['%'.$produit->getTva()->getValeur()] = round($prixTTC - $prixHT,2);
        else
            $commande['tva']['%'.$produit->getTva()->getValeur()] += round($prixTTC - $prixHT,2);

        $commande['produit'][$produit->getId()] = array('reference' => $produit->getNom(),
            'quantite' => $panier[$produit->getId()],
            'prixHT' => round($produit->getPrix(),2),
            'prixTTC' => round($produit->getPrix() / $produit->getTva()->getMultiplicate(),2));
    }

    $commande['livraison'] = array('prenom' => $livraison->getPrenom(),
        'nom' => $livraison->getNom(),
        'telephone' => $livraison->getTelephone(),
        'adresse' => $livraison->getAdresse(),
        'cp' => $livraison->getCp(),
        'ville' => $livraison->getVille(),
        'pays' => $livraison->getPays(),
        'complement' => $livraison->getComplement());
    $commande['facturation'] = array('prenom' => $facturation->getPrenom(),
        'nom' => $facturation->getNom(),
        'telephone' => $facturation->getTelephone(),
        'adresse' => $facturation->getAdresse(),
        'cp' => $facturation->getCp(),
        'ville' => $facturation->getVille(),
        'pays' => $facturation->getPays(),
        'complement' => $facturation->getComplement());
    $commande['prixHT'] = round($totalHT,2);
    $commande['prixTTC'] = round($totalTTC,2);
    $commande['token'] = bin2hex($generator->nextBytes(20));
    return $commande;
}

    public function prepareCommandeAction()
{
    $session = $this->getRequest()->getSession();
    $em = $this->getDoctrine()->getManager();

    if (!$session->has('commande'))
        $commande = new Commandes();
    else
        $commande = $em->getRepository('EcommerceBundle:Commandes')->find($session->get('commande'));

    $commande->setDate(new \DateTime());
    $commande->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
    $commande->setValider(0);
    $commande->setReference(0);
    $commande->setCommande($this->facture());

    if (!$session->has('commande')) {
        $em->persist($commande);
        $session->set('commande',$commande);
    }

    $em->flush();

    return new Response($commande->getId());
}

    // cette méthode remplace l'api banque

    public function validationCommandeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $commande = $em->getRepository('EcommerceBundle:Commandes')->find($id);

        if(!$commande || $commande->getValider() == 1)
            throw $this->createNotFoundException('La commande n\'existe pas.');
        $commande->setValider(1);
        $commande->setReference(1); // service
        $em->flush();
        // vider la session
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');

        $this->get('session')->getFlashBag()->add('success','Votre commande est validé avec succès');
        return $this->redirect($this->generateUrl('produits'));
    }

}







/*{
    // ici nous allons creér une méthode qui va stocker tous ce qu'on a fais jusqu'à présent du panier dans la base.
    // Cette méthode va être déclarer comme en service comme ça on va pourvoir l'utiliser dans une autre méthode.
    public function prepareCommandeAction(){
        $session = $this->getRequest()->getSession();
        $em =$this->getDoctrine()->getManager();

        if(!$session->has('commande'))
        {
            $commande = new Commandes();
        }else{
            $commande = $em->getRepository('EcommercBundle:Commandes')->find($session->get('commande'));
        }

        $commande->setDate(new \DateTime());
        $commande->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
        // un comptabilité il faut que toute les commande se suivent. mais ici c'est doctrine qui va sens charger de la sérialisation pour nous.
        $commande->setCommande($this->facture());

        if (!$session->has('commande'))
        {
            $em->persist($commande);
            $session->set('commande',$commande);
        }
        $em->flush();
        return new Response($commande->getId());
    }

    public function facture()
    {
        $em =$this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        // générer un token pour l'api(et ça dois être pour n'importe api)
        $generator = $this->container->get('security.secure_random');

        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTTC = 0;

        $facturation = $em->getRepository('EcommercBundle:UtilisateursAdresses')->find($adresse['facturation']);
        $livraison = $em->getRepository('EcommercBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $produits = $em->getRepository('EcommercBundle:Produits')->findArray(array_keys($session->get('panier')));

        foreach($produits as $produit)
        {
            $prixHT =  ($produit->getPrix() * $panier[$produit->getId()]);
            $prixTTC = ($produit->getPrix() * $panier[$produit->getId()] / $produit->getTva()->getMultiplicate());
            $totalHT += $prixHT;
            $totalTTC += $prixTTC;

            if(!isset($commande['tva']['%'.$produit->getTva()->getValeur()]))
                $commande['tva']['%'.$produit->getTva()->getValeur()] = round($prixTTC - $prixHT,2);
            else
                $commande['tva']['%'.$produit->getTva()->getValeur()] += round($prixTTC - $prixHT,2);

            $commande['produit'][$produit->getId()] = array(
                'reference' => $produit->getNom(),
                'quantite' => $panier[$produit->getId()],
                'prixHT' => round($produit->getPrix(),2),
                'prixTTC' => round($produit->getPrix() / $produit->getTva()->getMultiplicate(),2)
            );

            $commande['facturation'] = array(
                'prenom' => $facturation->getPrenom(),
                'nom' => $facturation->getNom(),
                'telephone' => $facturation->getTelephone(),
                'adresse' => $facturation->getAdresse(),
                'cp' =>  $facturation->getCp(),
                'ville' => $facturation->getPays(),
                'complement' => $facturation->getComplement()
            );
            $commande['livraison'] = array(
                'prenom' => $livraison->getPrenom(),
                'nom' => $livraison->getNom(),
                'telephone' => $livraison->getTelephone(),
                'adresse' => $livraison->getAdresse(),
                'cp' =>  $livraison->getCp(),
                'ville' => $livraison->getPays(),
                'complement' => $livraison->getComplement()
            );

            $commande['prixHT'] = round($totalHT,2);
            $commande['prixTTC'] = round($totalTTC,2);
            // ici on stock le token
            $commande['token'] = bin2hex($generator->nextBytes(20));

            return $commande;
        }
    }
}
*/
<?php
/**
 * Created by PhpStorm.
 * User: SiDi
 * Date: 24/06/2016
 * Time: 23:51
 */

namespace Ecommerce\EcommerceBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Commandes;

class CommandesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ccommande = new Commandes();
        $ccommande->setUtilisateur($this->getReference('utilisateur1'));
        $ccommande->setValider('1');
        $ccommande->setDate(new \DateTime());
        $ccommande->setReference('1');
        // petite commentaire : cette tableau va correpond id de l'article(par exemple un polo ) et le nombre d'achat (par exemple 2 achat )
        $ccommande->setCommande(array('0' => array('1' => '2'),'1' => array('2' => '1'),'2' => array('4' => '5')));
        $manager->persist($ccommande);

        $ccommande1 = new Commandes();
        $ccommande1->setUtilisateur($this->getReference('utilisateur2'));
        $ccommande1->setValider('1');
        $ccommande1->setDate(new \DateTime());
        $ccommande1->setReference('1');
        $ccommande1->setCommande(array(array('1' => '2'),array('2' => '1'),array('4' => '5')));
        $manager->persist($ccommande1);

        // enregitrement en base
        $manager->flush();

    }

    public function getOrder(){
        return 7;
    }
}
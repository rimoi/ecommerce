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
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('KHALIFA');
        $adresse1->setPrenom('sidi');
        $adresse1->setTelephone('+33605992481');
        $adresse1->setAdresse('1 Rue Gaspard Coriolis');
        $adresse1->setCp('37200');
        $adresse1->setVille('Tours');
        $adresse1->setPays('France');
        $adresse1->setComplement('Cité universitaie de grandMont');
        $manager->persist($adresse1);

        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2->setNom('JEMAL');
        $adresse2->setPrenom('Sidi Mohamed');
        $adresse2->setTelephone(' +(33) 6 61 69 86 30');
        $adresse2->setAdresse('1 Rue Gaspard Coriolis');
        $adresse2->setCp('33000');
        $adresse2->setVille('Bordeaux');
        $adresse2->setPays('France');
        $adresse2->setComplement('Cité universitaie de grandMont');
        $manager->persist($adresse2);


        // enregitrement en base
        $manager->flush();




    }

    public function getOrder(){
        return 6;
    }
}
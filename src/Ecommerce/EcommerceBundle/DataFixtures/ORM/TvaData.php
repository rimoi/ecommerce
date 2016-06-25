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
use Ecommerce\EcommerceBundle\Entity\Tva;

class TvaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tva1 = new Tva();
        $tva1->setMultiplicate('0.982');
        $tva1->setNom('TVA 1.75%');
        $tva1->setValeur('1.75');

        $manager->persist($tva1);

        $tva2 = new Tva();
        $tva2->setMultiplicate('0.833');
        $tva2->setNom('TVA 20%');
        $tva2->setValeur('20');

        $manager->persist($tva2);


        // enregitrement en base
        $manager->flush();

        // référence pour chaque fixtures

        $this->addReference('tva1', $tva1);
        $this->addReference('tva2', $tva2);


    }

    public function getOrder(){
        return 3;
    }
}
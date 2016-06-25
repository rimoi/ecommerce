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
use Ecommerce\EcommerceBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $cat1 = new Categories();
        $cat1->setNom('T-shirt');
        $cat1->setImage($this->getReference('media1'));

        $manager->persist($cat1);

        $cat2 = new Categories();
        $cat2->setNom('T-shirt');
        $cat2->setImage($this->getReference('media2'));

        $manager->persist($cat2);

        $cat3 = new Categories();
        $cat3->setNom('T-shirt Personnalisé');
        $cat3->setImage($this->getReference('media3'));

        $manager->persist($cat3);
        // enregitrement en base
        $manager->flush();

        // référence pour chaque fixtures

        $this->addReference('cat1', $cat1);
        $this->addReference('cat2', $cat2);
        $this->addReference('cat3', $cat3);

    }

    public function getOrder(){
        return 2;
    }
}
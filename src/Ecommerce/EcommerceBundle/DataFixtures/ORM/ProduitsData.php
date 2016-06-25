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
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $prod1 = new produits();
        $prod1->setNom('T-shirt Noir');
        $prod1->setDescription('Tee shirt Africaine City Mauritanie Noir');
        $prod1->setPrix('25');
        $prod1->setDisponible('1');
        $prod1->setImage($this->getReference('media3'));
        $prod1->setCategorie($this->getReference('cat3'));
        $prod1->setTva($this->getReference('tva1'));
        $manager->persist($prod1);

        $prod2 = new produits();
        $prod2->setNom('T-shirt Blanc');
        $prod2->setDescription('T-shirt Blanc simple');
        $prod2->setPrix('10');
        $prod2->setDisponible('1');
        $prod2->setImage($this->getReference('media1'));
        $prod2->setCategorie($this->getReference('cat1'));
        $prod2->setTva($this->getReference('tva2'));
        $manager->persist($prod2);


        // enregitrement en base
        $manager->flush();

        // Attenntion ici j'ai pas mis de réference paceque dans mon cas le produit ne par d'autre relation.




    }

    public function getOrder(){
        return 4;
    }
}
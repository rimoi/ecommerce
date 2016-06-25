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
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://bit.ly/28Tbpuk');
        $media1->setAlt('T-shirt');

        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://bit.ly/28TRCgd');
        $media2->setAlt('T-shirt');

        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://bit.ly/28WIjPy');
        $media3->setAlt('T-shirt Personnalisé');

        $manager->persist($media3);
        // enregitrement en base
        $manager->flush();

        // référence pour chaque fixtures

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);

    }

    public function getOrder(){
        return 1;
    }
}
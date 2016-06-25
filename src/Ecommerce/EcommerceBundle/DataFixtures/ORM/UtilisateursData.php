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
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;


class UtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    // ce attribut va nou permettre d'accder au service  security.encoder_factory
    private $container;

    public function setContainer(ContainerInterface $container = null){
        $this->container = $container;
    }


    public function load(ObjectManager $manager)
    {
        $util1 = new Utilisateurs();
        $util1->setUsername('sidi');
        $util1->setEmail('sidi.khalifa@live.fr');
        $util1->setEnabled(1);
        $util1->setPassword($this->container->get('security.encoder_factory')->getEncoder($util1)->encodePassword('1234', $util1->getSalt()));
        $manager->persist($util1);

        $util2 = new Utilisateurs();
        $util2->setUsername('James');
        $util2->setEmail('sidimed26@gamil.com');
        $util2->setEnabled(1);
        $util2->setPassword($this->container->get('security.encoder_factory')->getEncoder($util2)->encodePassword('num2strfloat50', $util2->getSalt()));
        $manager->persist($util2);
        // utilisateur de développement
        $util3 = new Utilisateurs();
        $util3->setUsername('Dev');
        $util3->setEmail('dev@zemenak.com');
        $util3->setEnabled(1);
        $util3->setPassword($this->container->get('security.encoder_factory')->getEncoder($util3)->encodePassword('1234', $util3->getSalt()));
        $manager->persist($util3);
        // utilisateur client
        $util4 = new Utilisateurs();
        $util4->setUsername('Client');
        $util4->setEmail('client@zemenak.com');
        $util4->setEnabled(1);
        $util4->setPassword($this->container->get('security.encoder_factory')->getEncoder($util4)->encodePassword('1234', $util4->getSalt()));
        $manager->persist($util4);

        // enregitrement en base
        $manager->flush();

        // référence pour chaque fixtures

        $this->addReference('utilisateur1', $util1);
        $this->addReference('utilisateur2', $util2);
        $this->addReference('utilisateur3', $util3);
        $this->addReference('utilisateur4', $util4);
    }

    public function getOrder(){
        return 5;
    }
}
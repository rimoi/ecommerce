<?php
/**
 * Created by PhpStorm.
 * User: SiDi
 * Date: 25/06/2016
 * Time: 21:55
 */
namespace Pages\PagesBundle\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Pages\PagesBundle\Entity\Pages;

class MediaData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $pages1 = new Pages();
        $pages1->setTitre('CGV');
        $pages1->setContenu('
            <div class="row">
                <h1>Champ d\'application </h1>
                <p>Les pr�sentes conditions g�n�rales de vente valent pour toutes les relations commerciales s\'�tablissant entre Shirtinator AG et ses clients dans la version en vigueur � la date de la commande du client.</p>
                <h1>Responsabilit� de l\'ex�cution en ligne: de l\'offre au paiemen</h1>
                <p>Deux types de boutiques sont � la disposition du client sur la plateforme.</p>
            </div>
        ');

        $manager->persist($pages1);

        $pages2 = new Pages();
        $pages2->setTitre('Mention l�gales');
        $pages2->setContenu('
            <div class="row">
                <h1>Signature du contrat </h1>
                <p> Sur les sites www.shirtinator.fr les contrats sont exclusivement conclus en langue fran�aise. </p>
                <h1>Droit de r�tractation et retour de colis</h1>
                <p>Vous avez le droit de vous r�tracter du pr�sent contrat sans donner de motif dans un d�lai de quatorze jours.</p>
            </div>
        ');
        $manager->persist($pages2);

        // enregitrement en base
        $manager->flush();



    }


}
<?php
/**
 * Created by PhpStorm.
 * User: SiDi
 * Date: 23/06/2016
 * Time: 18:42
 */

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class testType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        // notre formulaire
        $builder
            ->add('email','email')
            ->add('nom')
            ->add('prenom')
            ->add('sexe','choice',array('choices' =>
                array('placeholder' => 'Choix Sexe','h' => 'Homme','f'=>'Femme'),'expanded' => true))
            ->add('contenu','textarea')
            ->add('date','datetime')
            ->add('utilisateurs','entity',array(
                'class' => 'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'
            ))
            ->add('envoyer','submit')
        ;
    }

    // par convention
    public function getName(){
        return 'ecommerce_ecommercebundle_test';
    }
}
<?php

namespace Acme\ChampionatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JoueurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPrenom')
            ->add('datenaissance')
            ->add('nationalite')
            ->add('idEquipe')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\ChampionatBundle\Entity\Joueur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_championatbundle_joueur';
    }
}

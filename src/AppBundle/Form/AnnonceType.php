<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('categorie',null, array(
            'label' => 'Categorie : ',
            'required' => true
            ))
        ->add('titre',null, array(
            'label' => 'Titre : ',
            'required' => true
            ))
        ->add('introduction',null, array(
            'label' => 'Introduction : ',
            'required' => false
            ))
        ->add('description',null, array(
            'label' => 'Description : ',
            'required' => false
            ));


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'AppBundle_annonce';
    }


}

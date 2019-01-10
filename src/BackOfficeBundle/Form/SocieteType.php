<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


/**
 * SocieteType form to create or edit a Societe
 */
class SocieteType extends AbstractType
{
    /**
     * {@inheritdoc}
     * 
     * Put its name, address and city
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('societe')->add('adresse')->add('ville');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Societe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_societe';
    }


}

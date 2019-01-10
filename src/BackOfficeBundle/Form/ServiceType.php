<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


/**
 * ServiceType form to create or edit a Service
 * 
 */
class ServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     * 
     * Only put its name
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('service');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Service'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_service';
    }


}

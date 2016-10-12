<?php

namespace StickyBit\HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageMedType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('corp', 'textarea')  ;     
          /*  ->add('idMedecin','entity', array(
            'class' => 'StickyBitHospitalBundle:medecin',
            'property'=>'nomMedecin',
            'label' => 'nomMedecin:'
        )
        )*/
             
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'StickyBit\HospitalBundle\Entity\MessageMed'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stickybit_hospitalbundle_messagemed';
    }
}

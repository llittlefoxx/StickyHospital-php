<?php

namespace StickyBit\HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessagepatientType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('dateEnv')
            ->add('corp','textarea')
           /* ->add('idMed','entity', array(
            'class' => 'StickyBitHospitalBundle:medecin',
            'property'=>'idMedecin',
            'label' => 'Choisir:'
        )
        )*/
                     
         /*   ->add('idPatient','entity', array(
            'class' => 'StickyBitHospitalBundle:patient',
            'property'=>'nomPatient',
            'label' => 'nomPatient:'
        )
        );
        */        
                
                ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'StickyBit\HospitalBundle\Entity\Messagepatient'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stickybit_hospitalbundle_messagepatient';
    }
}

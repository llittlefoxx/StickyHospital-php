<?php

namespace StickyBit\HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RdvType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateRdv')
            ->add('idserv','entity', array(
            'class' => 'StickyBitHospitalBundle:service',
            'property'=>'nomServ',
            'label' => 'Service:'
        )
        )  
         ->add('idMedecin','entity', array(
            'class' => 'StickyBitHospitalBundle:medecin',
            'property'=>'nomMedecin',
            'label' => 'Medecin:'
        )
        )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'StickyBit\HospitalBundle\Entity\Rdv'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stickybit_hospitalbundle_rdv';
    }
}

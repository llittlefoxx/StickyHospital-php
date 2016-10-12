<?php

namespace StickyBit\HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PatientType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPatient','text')
            ->add('prenomPatient','text')
            ->add('cinPatient','number')
            ->add('adresse','text')
            ->add('telPatient','number')
            ->add('mailPatient','email')
            ->add('urlPhotoPatient','text')
            ->add('sexPatient','text')
            ->add('dateNPatient','date')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'StickyBit\HospitalBundle\Entity\Patient'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_patientbundle_patient';
    }
}

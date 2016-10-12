<?php

namespace Backend\MedecinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ObservationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('texte','textarea')
            ->add('dateObservation','date')
            ->add('idDossiermedical','entity',array(
                'class'=>'BackendMedecinBundle:DossierMedical',
                'property'=>'idDossiermedical'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\MedecinBundle\Entity\Observation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backend_medecinbundle_observation';
    }
}

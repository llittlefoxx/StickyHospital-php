<?php

namespace Backend\MedecinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InterventionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libIntervention','text')
            ->add('prixInterv','number')
            ->add('dateInterv','date')
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
            'data_class' => 'Backend\MedecinBundle\Entity\Intervention'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backend_medecinbundle_intervention';
    }
}

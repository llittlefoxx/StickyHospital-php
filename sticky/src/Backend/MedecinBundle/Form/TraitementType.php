<?php

namespace Backend\MedecinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TraitementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libTraitement')
            ->add('prixTraitement')
            ->add('idDossiermedical','entity',array(
                'class'=>'BackendMedecinBundle:DossierMedical',
                'property'=>'idDossiermedical'
            ))
            ->add('idIntervention','entity',array(
                'class' => 'BackendMedecinBundle:Intervention',
                'property' => 'libIntervention'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\MedecinBundle\Entity\Traitement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backend_medecinbundle_traitement';
    }
}

<?php

namespace Pidev\MedecinBundle\Form;

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
            ->add('idPatient')
            ->add('idMedecin')
            ->add('idServ')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\MedecinBundle\Entity\Rdv'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_medecinbundle_rdv';
    }
}

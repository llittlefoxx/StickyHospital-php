<?php

namespace Pidev\MedecinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnquiryType
 *
 * @author Tlili Mohamed Ali
 */
class EnquiryType extends AbstractType {
      /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('email', 'email')
        ->add('subject')
        ->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}

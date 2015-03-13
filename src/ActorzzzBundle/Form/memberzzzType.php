<?php

namespace ActorzzzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class memberzzzType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeMemberzzz')
            ->add('pseudoMemberzzz')
            ->add('passMemberzzz')
            ->add('melMemberzzz')
            ->add('idImage')
            ->add('idAdresse')
            ->add('dateAnniv')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ActorzzzBundle\Entity\memberzzz'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'actorzzzbundle_memberzzz';
    }
}

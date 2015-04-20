<?php

namespace VendorProjet\imieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCompany')
            ->add('name')
            ->add('siret')
            ->add('dateStartFriendship')
            ->add('dateCreation')
            ->add('salariesNumber')
            ->add('resume')
            ->add('businessSector')
            ->add('department')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VendorProjet\imieBundle\Entity\Company'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vendorprojet_imiebundle_company';
    }
}

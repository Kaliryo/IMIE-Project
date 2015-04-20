<?php

namespace VendorProjet\imieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeOfferType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idTypeContrat')
            ->add('resume')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('name')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VendorProjet\imieBundle\Entity\TypeOffer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vendorprojet_imiebundle_typeoffer';
    }
}

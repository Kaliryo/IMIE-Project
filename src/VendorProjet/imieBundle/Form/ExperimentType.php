<?php

namespace VendorProjet\imieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExperimentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idExperiment')
            ->add('resume')
            ->add('title')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('companyName')
            ->add('place')
            ->add('departmentNumber')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VendorProjet\imieBundle\Entity\Experiment'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vendorprojet_imiebundle_experiment';
    }
}

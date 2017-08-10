<?php
namespace BackendBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('city', EntityType::class, array(
                'class' => 'BackendBundle:City',
                'choice_label' => 'name',
                'attr' => array(
                    'class' => 'form-control',
                    'id' => 'location',
                    'label' => 'Ciudad',
                ),
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        //Si no se indicara la entidad City no se realizarían las validaciones 
        //de datos contra los campos definidos en la entidad a la hora de pasar 
        //la información en el formulario. 
        $resolver->setDefaults(array(
//            'data_class' => 'BackendBundle\Entity\City'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'search';
    }
}

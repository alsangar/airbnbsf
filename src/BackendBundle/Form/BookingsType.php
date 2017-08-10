<?php
namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingsType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('checkin', 'date', array(
                'format' => 'ddMMyyyy',
                'attr' => array(
                    'style' => 'display:none;'
                ),
                'label' => false
                )
            )
            ->add('checkout', 'date', array(
                'format' => 'ddMMyyyy',
                'attr' => array(
                    'style' => 'display:none;'
                ),
                'label' => false
                )
            )
            ->add('nights', null, array(
                'attr' => array(
                    'class' => 'form-control',
                    'readonly' => 'readonly'
                ),
                'label' => false
            ))
            ->add('priceNight', null, array(
                'attr' => array(
                    'class' => 'form-control',
                    'readonly' => 'readonly'
                ),
                'label' => false
            ))
            ->add('priceTotal', null, array(
                'attr' => array(
                    'class' => 'form-control',
                    'readonly' => 'readonly',
                ),
                'label' => false
            ))
            ->add('pax', null, array(
                'attr' => array(
                    'class' => 'form-control',
                    'min' => '0'
                ),
                'label' => false
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Bookings'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_bookings';
    }
}

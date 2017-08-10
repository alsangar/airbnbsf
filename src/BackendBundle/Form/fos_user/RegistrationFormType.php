<?php

/*
 * Aqui estoy machando y rehaciendo el forumlario entero cuando en realidad solo
 * quería agregar algunos campos al ya existente. Para hacer esto tendría que 
 * hacer uso del formulario original con:
 * use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
 * 
 * Despues tendría que definir el metodo getParent(()
 * 
 * public function getParent()
 * {
 *      return BaseRegistrationFormType::class;
 * }
 *
 *  Para informar a FOSUserBundle de nuestro nuevo formulario, habría que definirlo
 * como servicio (service.yml) y configurarlo (config.yml)
 * 
 * Más información en: https://knpuniversity.com/screencast/fosuserbundle/customize-forms
 * 
 */

namespace BackendBundle\Form\fos_user;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType {

    /**
     * @var string
     */
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class) {
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {


        $builder
                ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
                ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
                ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                    'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'form.password'),
                    'second_options' => array('label' => 'form.password_confirmation'),
                    'invalid_message' => 'fos_user.password.mismatch',
                ))
                ->add('firstName', null, array('attr' => array('class' => 'form-control'), 'label' => 'form.firstName'))
                ->add('lastName', null, array('attr' => array('class' => 'form-control'), 'label' => 'form.lastName'))
                ->add('phone', null, array('attr' => array('class' => 'form-control'), 'label' => 'form.phone'))

        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'registration',
            // BC for SF < 2.8
            'intention' => 'registration',
        ));
    }

    // BC for SF < 3.0
    /**
     * {@inheritdoc}
     */
    public function getName() {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'fos_user_registration';
    }

}

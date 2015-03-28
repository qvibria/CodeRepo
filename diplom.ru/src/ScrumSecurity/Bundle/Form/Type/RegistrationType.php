<?php
/**
 * Created by PhpStorm.
 * User: Klay
 * Date: 09.03.15
 * Time: 21:11
 */

namespace ScrumSecurity\Bundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType {

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return "registration";
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('user', new UserType());
        $builder->add('register', 'submit');
    }


}
<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Client' => 'ROLE_USER',
                    'Prospect' => 'ROLE_PROSPECT',
                    'Admin' => 'ROLE_ADMIN',
                    'Maraicher' => 'ROLE_MARAICHER',
                ],
                'help' => 'Sélectionner un rôle',
                'multiple' => false,
                'mapped' => false,
            ])
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('phone')
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

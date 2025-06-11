<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
                'data' => $options['data']->getRoles()[0] ?? 'ROLE_USER',
            ])
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('phone')
            ->add(
                'image',
                FileType::class,
                [
                    'required' => false,
                    'mapped' => false,
                    'label' => "Image User",
                    'attr' => [
                        'placeholder' => 'Placeholder Image User'
                    ],
                    'constraints' => [
                        new File([
                            'maxSize' => '400K',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/webp'
                            ],
                            'mimeTypesMessage' => 'Merci de charger un fichier jpg, png ou webp',
                            'uploadFormSizeErrorMessage' => 'La taille max autorisée est de 400K'

                        ])
                    ]
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

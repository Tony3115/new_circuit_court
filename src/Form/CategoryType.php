<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add(
                'image',
                FileType::class,
                [
                    'required' => false,
                    'mapped' => false,
                    'label' => "Image Produit",
                    'attr' => [
                        'placeholder' => 'Placeholder Image Produit'
                    ],
                    'constraints' => [
                        new File([
                            'maxSize' => '400K',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png'
                            ],
                            'mimeTypesMessage' => 'Merci de charger un fichier jpg ou png',
                            'uploadFormSizeErrorMessage' => 'La taille max autorisée est de 400K'

                        ])
                    ]
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}

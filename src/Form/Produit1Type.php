<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class Produit1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('prix')
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

                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/webp'
                            ],
                            'mimeTypesMessage' => 'Merci de charger un fichier jpg,png ou webp',


                        ])
                    ]
                ]
            )
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'placeholder' => 'choisir une catégorie',
                'label' => 'Catégorie',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}

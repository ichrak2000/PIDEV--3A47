<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', null, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Please enter a name',
                ]),
                new Length([
                    'min' => 3,
                    'minMessage' => 'The name must be at least {{ limit }} characters long',
                ]),
            ],
        ])
            ->add('description', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a description',
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'The name must be at least {{ limit }} characters long',
                    ]),
                
                ],
            ])
            ->add('service_associe', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter associated services',
                    ]),
                    new Length([
                        'min' => 4,
                        'minMessage' => 'The name must be at least {{ limit }} characters long',
                    ]),
                
                ],
            ])
            ->add('date_de_creation', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a creation date',
                    ]),
                ],
            ])
            ->add('ImagePath', FileType::class, [
                'label' => 'Image (JPG file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPG file',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}

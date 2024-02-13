<?php

namespace App\Form;

use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('firstName', TextType::class, [
            'attr' => [
                'class' => 'form-control',
            ],
            'label' => 'Prénom',
            'label_attr' => [
                'class' => 'form-label mt-2'
            ],
            'constraints' => [
                new NotBlank(['message' => 'Veuillez remplir.']),
                new Length([
                    'max' => 50,
                    'maxMessage' => 'Le texte ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('lastName', TextType::class, [
            'attr' => [
                'class' => 'form-control',
            ],
            'label' => 'Nom',
            'label_attr' => [
                'class' => 'form-label mt-2'
            ],
            'constraints' => [
                new NotBlank(['message' => 'Veuillez remplir.']),
                new Length([
                    'max' => 50,
                    'maxMessage' => 'Le texte ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ]) 
            ->add('rating', ChoiceType::class, [
                'choices' => [
                    'Votre note' => null,
                    '1/5 - Pas du tout satisfait' => 1,
                    '2/5 - Peu satisfait' => 2,
                    '3/5 - Moyennement satisfait' => 3,
                    '4/5 - Satisfait' => 4,
                    '5/5 - Très satisfait' => 5,
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner une note']),
                ],
                'label' => ' ',
            ])
            ->add('comment', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Commentaire',
                'label_attr' => [
                    'class' => 'form-label mt-2'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner une note']),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'yellow-btn mt-3'
                ],
                'label' => 'Envoyer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}

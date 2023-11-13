<?php

namespace App\Form;

use App\Entity\Ad;
use App\Entity\Contact;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
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
            ])
            ->add('lastName', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label mt-2'
                ],
            ])

            ->add('email',  EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Email',
                'label_attr' => [
                    'class' => 'form-label mt-2'
                ],
            ])

            ->add('phoneNumber', TelType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Téléphone',
                'label_attr' => [
                    'class' => 'form-label mt-2'
                ],
            ])

            ->add('subject', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Sujet',
                'label_attr' => [
                    'class' => 'form-label mt-2'
                ],
            ])

            ->add('message', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Message',
                'label_attr' => [
                    'class' => 'form-label mt-2'
                ],
            ])

            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-4'
                ],
                'label' => 'Envoyer le formulaire'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}

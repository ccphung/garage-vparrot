<?php

namespace App\Form;

use App\Entity\Contact;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

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
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre prénom.']),
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
                    new NotBlank(['message' => 'Veuillez entrer votre nom.']),
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
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre email.']),
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
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer votre numéro de téléphone.']),
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
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer un sujet.']),
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
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez écrire votre message.']),
                ],
            ])

            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-yellow mt-3'
                ],
                'label' => 'Envoyer le formulaire'
            ])
        ;

        // Google recaptcha
        $builder->add('captcha', Recaptcha3Type::class, [
            'constraints' => new Recaptcha3(),
            'action_name' => 'contact',
            'locale' => 'fr',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}

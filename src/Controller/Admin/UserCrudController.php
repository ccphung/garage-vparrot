<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Crud, KeyValueStore};
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, EmailField, TextField};
use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use Symfony\Component\Form\{FormBuilderInterface, FormEvents};
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Employés')
            ->setEntityLabelInSingular('Employé')

            ->setPageTitle("index", "Page d'administration des employés")
            ->setPageTitle("edit", "Page de modification de l'employé")

            ->setPaginatorPageSize(10);
    }

    public function __construct(
        public UserPasswordHasherInterface $userPasswordHasher
    ) {}

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('firstname'),
            TextField::new('lastname'),
            EmailField::new('email'),
        ];

        
        $password = TextField::new('password')->setFormType(RepeatedType::class)
            ->setFormTypeOptions([
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Entrez à nouveau le mot de passe'],
                'mapped' => false,
                'constraints' => [
                    new \Symfony\Component\Validator\Constraints\Regex("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,}$/", "Le mot de passe doit contenir au moins 12 caractères, dont 1 majuscule, 1 miniscule, 1 caractère spécial et 1 chiffre"),
                ]
            ])
            ->setRequired($pageName === Crud::PAGE_NEW)
            ->onlyOnForms()
            ;
        $fields[] = $password;

        return $fields;
    }

    public function createNewFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createNewFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    public function createEditFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createEditFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    private function addPasswordEventListener(FormBuilderInterface $formBuilder): FormBuilderInterface
    {
        return $formBuilder->addEventListener(FormEvents::POST_SUBMIT, $this->hashPassword());
    }

    private function hashPassword() {
        return function($event) {
            $form = $event->getForm();
            if (!$form->isValid()) {
                return;
            }
            $password = $form->get('password')->getData();
            if ($password === null) {
                return;
            }

            $hash = $this->userPasswordHasher->hashPassword($this->getUser(), $password);
            $form->getData()->setPassword($hash);
        };
    }
}


<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

#[AttributeIsGranted('ROLE_USER')]
class ContactCrudController extends AbstractCrudController
{
    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Demandes de contact')
            ->setEntityLabelInSingular('Demande de contact')

            ->setPageTitle("index", "Gestion des demandes de contact")
            ->setPageTitle("edit", "Gestion de la demande de contact")

            ->setPaginatorPageSize(10);
    }

    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm()
                ->hideOnIndex(),
            TextField::new('firstName')
                ->setLabel('Prénom'),
            TextField::new('lastName')
                ->setLabel('Nom'),
            EmailField::new('email')
                ->setLabel('Email'),
            TelephoneField::new('phoneNumber')
                ->setLabel('Téléphone'),
            TextField::new('subject')
                ->setLabel('Sujet'),
            TextField::new('message')
                ->setLabel('Message'),
            DateField::new('createdAt')
                ->setLabel('Date'),
            BooleanField::new('isProcessed')
                ->setLabel('Traité'),
        ];
    }

}

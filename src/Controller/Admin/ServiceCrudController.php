<?php

namespace App\Controller\Admin;

use Vich\UploaderBundle\Form\Type\VichFileType;
use App\Entity\Service;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, MoneyField, IntegerField, TextareaField};
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

#[AttributeIsGranted('ROLE_ADMIN')]
class ServiceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Service::class;
    }

    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Services')
            ->setEntityLabelInSingular('Service')

            ->setPageTitle("index", "Gestion des services")
            ->setPageTitle("edit", "Gestion d'un service");
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('title')
                ->setLabel('Titre'),
            MoneyField::new('price')
                ->setCurrency('EUR')
                ->setNumDecimals(0)
                ->setLabel('Prix')
                ->setCustomOption('storedAsCents', false),
            TextareaField::new('content')
                ->setLabel('Description'),
            TextField::new('imageName')
                ->setLabel('Nom de l\'image'),
            TextField::new('imageFile')
                ->setFormType(VichFileType::class),
            IntegerField::new('size')
                ->hideOnForm(),
        ];
        return $fields;
    }
}

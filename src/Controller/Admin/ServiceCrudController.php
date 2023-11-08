<?php

namespace App\Controller\Admin;

use Vich\UploaderBundle\Form\Type\VichFileType;
use App\Entity\Service;
use App\Form\Type\ServiceImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, CollectionField, MoneyField, ImageField, TextareaField, IntegerField};
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

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

            ->setPageTitle("index", "Page d'administration des services")
            ->setPageTitle("edit", "Page de modification d'un service");
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
                ->setLabel('Prix'),
            TextField::new('content')
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

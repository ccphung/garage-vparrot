<?php

namespace App\Controller\Admin;

use App\Entity\Service;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, CollectionField, MoneyField};

class ServiceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Service::class;
    }

    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Serivces')
            ->setEntityLabelInSingular('Serivce')

            ->setPageTitle("index", "Page d'administration des services")
            ->setPageTitle("edit", "Page de modification d'un service");
    }


    
    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id')
                ->hideOnForm(),
            MoneyField::new('price')->setCurrency('EUR'),
            TextField::new('description'),
            CollectionField::new('image')
        ];
        return $fields;
    }
}

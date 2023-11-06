<?php

namespace App\Controller\Admin;

use App\Entity\Ad;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, DateTimeField, AssociationField, MoneyField, IntegerField};

class AdCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ad::class;
    }

    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Annonces')
            ->setEntityLabelInSingular('Annonce')

            ->setPageTitle("index", "Page d'administration des annonces")
            ->setPageTitle("edit", "Page de modification de l'annonce");
    }


    
    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('title'),
            MoneyField::new('price')->setCurrency('EUR'),
            IntegerField::new('kilometers'),
            DateTimeField::new('registrationYear')->renderAsNativeWidget(),
            DateTimeField::new('createdAt')
        ];
        return $fields;
    }
}

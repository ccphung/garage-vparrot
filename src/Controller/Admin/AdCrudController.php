<?php

namespace App\Controller\Admin;

use App\Entity\Ad;
use DateTimeImmutable;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, DateField, AssociationField, MoneyField, IntegerField};

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
            TextField::new('title')
                ->setLabel('Titre'),
            TextField::new('brand')
                ->setLabel('Marque'),
            MoneyField::new('price')->setCurrency('EUR')
                ->setLabel('Prix'),
            IntegerField::new('kilometers')
                ->setLabel('Kilométrage'),
            DateField::new('registrationYear')->renderAsNativeWidget()
                ->setLabel('Année de mise en circulation'),
            DateField::new('createdAt')
                ->hideOnForm(),
        ];
        return $fields;
    }
}

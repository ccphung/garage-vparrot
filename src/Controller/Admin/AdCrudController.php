<?php

namespace App\Controller\Admin;

use App\Entity\Ad;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{AssociationField, IdField, TextField, DateField, MoneyField, IntegerField, FormField, BooleanField};
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

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

            ->setPageTitle("index", "Gestion des annonces")
            ->setPageTitle("edit", "Gestion de l'annonce");
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            FormField::addTab('Détails l\'annonce'),
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('title')
                ->setLabel('Titre'),
            AssociationField::new('brand')
                ->renderAsNativeWidget()
                ->setLabel('Marque'),
            MoneyField::new('price')->setCurrency('EUR')
                ->setCurrency('EUR')
                ->setNumDecimals(0)
                ->setLabel('Prix')
                ->setCustomOption('storedAsCents', false)
                ->setFormTypeOption('constraints', [
                    new PositiveOrZero(['message' => 'Le prix doit être un nombre positif ou nul'])
                ]),
            IntegerField::new('kilometers')
                ->setLabel('Kilométrage'),
            DateField::new('registrationYear')->renderAsNativeWidget()
                ->setLabel('Année de mise en circulation'),
            DateField::new('createdAt')
                ->setLabel('Créée le')
                ->hideOnForm(),
            AssociationField::new('user')
                ->renderAsNativeWidget()
                ->setLabel('Créée par'),



            FormField::addTab('Informations complémentaires'),
            TextField::new('gearcase')
                ->setLabel('Boîte de vitesse')
                ->hideOnIndex(),
            IntegerField::new('door')
                ->setLabel('Nombre de portières')
                ->hideOnIndex(),
            TextField::new('color')
                ->setLabel('Couleur')
                ->hideOnIndex(),
            IntegerField::new('power')
                ->setLabel('Puissance')
                ->hideOnIndex(),
            TextField::new('Energy')
                ->setLabel('Energie')
                ->setRequired(true)
                ->hideOnIndex(),

            FormField::addTab('Options & équipements'),
            BooleanField::new('gps')
                ->setLabel('GPS'),
            BooleanField::new('airConditioner')
                ->setLabel('Climatisation'),
            BooleanField::new('reversingCamera')
                ->setLabel('Caméra de recul'),
            BooleanField::new('androidAuto')
                ->setLabel('Android Auto'),
            BooleanField::new('speedRegulator')
                ->setLabel('Régulateur de vitesse'),

            FormField::addTab('Images'),
            FormField::addFieldset(),
            TextField::new('imageFile1')
                ->setFormType(VichFileType::class)
                ->setLabel('Image 1-format 800x533px et .jpg')
                ->hideOnIndex(),
            FormField::addFieldset(),
            TextField::new('imageFile2')
                ->setFormType(VichFileType::class)
                ->setLabel('imageFile2-format 800x533px et .jpg')
                ->hideOnIndex(),
            FormField::addFieldset(),
            TextField::new('imageFile3')
                ->setFormType(VichFileType::class)
                ->setLabel('Image 3-format 800x533px et .jpg')
                ->hideOnIndex(),
        ];
        return $fields;
    }
}

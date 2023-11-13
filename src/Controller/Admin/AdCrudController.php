<?php

namespace App\Controller\Admin;

use App\Entity\Ad;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, DateField, MoneyField, IntegerField, FormField};
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

#[AttributeIsGranted('ROLE_USER')]
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
            FormField::addTab('Détails l\'annonce'),
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('title')
                ->setLabel('Titre'),
            TextField::new('brand')
                ->setLabel('Marque'),
            MoneyField::new('price')->setCurrency('EUR')
                ->setCurrency('EUR')
                ->setNumDecimals(0)
                ->setLabel('Prix')
                ->setCustomOption('storedAsCents', false),
            IntegerField::new('kilometers')
                ->setLabel('Kilométrage'),
            DateField::new('registrationYear')->renderAsNativeWidget()
                ->setLabel('Année de mise en circulation'),
            DateField::new('createdAt')
                ->setLabel('Créée le')
                ->hideOnForm(),

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
                ->hideOnIndex(),

            FormField::addTab('Images'),
            FormField::addFieldset(),

            TextField::new('imageRename1')
            ->setLabel('Nom de l\'image 1')
            ->hideOnIndex(),
            TextField::new('imageFile1')
                ->setFormType(VichFileType::class)
                ->setLabel('Image 1')
                ->hideOnIndex(),
            FormField::addFieldset(),
            TextField::new('imageRename2')
                ->setLabel('Nom de l\'image 2 (choisir des noms différents)')
                ->hideOnIndex(),
            TextField::new('imageFile2')
                ->setFormType(VichFileType::class)
                ->setLabel('Image 2')
                ->hideOnIndex(),

            FormField::addFieldset(),
            TextField::new('imageRename3')
                ->setLabel('Nom de l\'image 3 (choisir des noms différents)')
                ->hideOnIndex(),
            TextField::new('imageFile3')
                ->setFormType(VichFileType::class)
                ->setLabel('Image 3')
                ->hideOnIndex(),
        ];
        return $fields;
    }
}

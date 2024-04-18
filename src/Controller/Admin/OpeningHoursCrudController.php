<?php

namespace App\Controller\Admin;

use App\Entity\OpeningHours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, FormField, IntegerField, TextareaField};

#[AttributeIsGranted('ROLE_ADMIN')]
class OpeningHoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OpeningHours::class;
    }

    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInSingular('Horaires d\'ouverture')

            ->setPageTitle("index", "Gestion des horaires d'ouverture")
            ->setPageTitle("edit", "Gestion des horaires d'ouverture");
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
            ->hideOnForm()
            ->hideOnIndex(),
            TextField::new('mon_am_open')
                ->setLabel('Lun mat ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('mon_am_close')
                ->setLabel('Lun mat fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('mon_pm_open')
                ->setLabel('Lun ap ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('mon_pm_close')
                ->setLabel('Lun ap fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('tue_am_open')
                ->setLabel('Mar mat ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('tue_am_close')
                ->setLabel('Mar mat fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('tue_pm_open')
                ->setLabel('Mar ap ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('tue_pm_close')
                ->setLabel('Mar ap fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('wed_am_open')
                ->setLabel('Mer mat ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('wed_am_close')
                ->setLabel('Mer mat fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('wed_pm_open')
                ->setLabel('Mer ap ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('wed_pm_close')
                ->setLabel('Mer ap fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('thr_am_open')
                ->setLabel('Jeu mat ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('thr_am_close')
                ->setLabel('Jeu mat fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('thr_pm_open')
                ->setLabel('Jeu ap ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('thr_pm_close')
                ->setLabel('Jeu ap fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('fri_am_open')
                ->setLabel('Ven mat ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('fri_am_close')
                ->setLabel('Ven mat fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('fri_pm_open')
                ->setLabel('Ven ap ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('fri_pm_close')
                ->setLabel('Ven ap fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('sat_am_open')
                ->setLabel('Sam mat ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('sat_am_close')
                ->setLabel('Sam mat fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('sat_pm_open')
                ->setLabel('Sam ap ouverture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('sat_pm_close')
                ->setLabel('Sam ap fermeture')
                ->setColumns('col-sm-3')
                ->setCssClass('col-md-3'),
            TextField::new('sun')
                ->setLabel('Dimanche')
                ->setColumns('col-sm-3'),
        ];
    }

}

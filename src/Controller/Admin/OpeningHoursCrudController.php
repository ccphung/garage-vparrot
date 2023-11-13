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

            ->setPageTitle("index", "Page d'administration des horaires d'ouverture")
            ->setPageTitle("edit", "Page de modification des horaires d'ouverture");
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
            ->hideOnForm()
            ->hideOnIndex(),
            TextField::new('mon_am_open')
                ->setLabel('Lun mat ouverture'),
            TextField::new('mon_am_close')
                ->setLabel('Lun mat fermeture'),
            TextField::new('mon_pm_open')
                ->setLabel('Lun ap ouverture'),
            TextField::new('mon_pm_close')
                ->setLabel('Lun ap fermeture'),
            TextField::new('tue_am_open')
                ->setLabel('Mar mat ouverture'),
            TextField::new('tue_am_close')
                ->setLabel('Mar mat fermeture'),
            TextField::new('tue_pm_open')
                ->setLabel('Mar ap ouverture'),
            TextField::new('tue_pm_close')
                ->setLabel('Mar ap fermeture'),
            TextField::new('wed_am_open')
                ->setLabel('Mer mat ouverture'),
            TextField::new('wed_am_close')
                ->setLabel('Mer mat fermeture'),
            TextField::new('wed_pm_open')
                ->setLabel('Mer ap ouverture'),
            TextField::new('wed_pm_close')
                ->setLabel('Mer ap fermeture'),
            TextField::new('thr_am_open')
                ->setLabel('Jeu mat ouverture'),
            TextField::new('thr_am_close')
                ->setLabel('Jeu mat fermeture'),
            TextField::new('thr_pm_open')
                ->setLabel('Jeu ap ouverture'),
            TextField::new('thr_pm_close')
                ->setLabel('Jeu ap fermeture'),
            TextField::new('fri_am_open')
                ->setLabel('Ven mat ouverture'),
            TextField::new('fri_am_close')
                ->setLabel('Ven mat fermeture'),
            TextField::new('fri_pm_open')
                ->setLabel('Ven ap ouverture'),
            TextField::new('fri_pm_close')
                ->setLabel('Ven ap fermeture'),
            TextField::new('sat_am_open')
                ->setLabel('Sam mat ouverture'),
            TextField::new('sat_am_close')
                ->setLabel('Sam mat fermeture'),
            TextField::new('sat_pm_open')
                ->setLabel('Sam ap ouverture'),
            TextField::new('sat_pm_close')
                ->setLabel('Sam ap fermeture'),
            TextField::new('sun')
                ->setLabel('Dimanche'),
        ];
    }

}

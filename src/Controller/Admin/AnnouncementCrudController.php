<?php

namespace App\Controller\Admin;

use App\Entity\Announcement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

#[AttributeIsGranted('ROLE_USER')]
class AnnouncementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Announcement::class;
    }

    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Annonces spéciales')
            ->setEntityLabelInSingular('Annonce spéciale')

            ->setPageTitle("index", "Gestion des annonces spéciales")
            ->setPageTitle("edit", "Gestion d'une annonce spéciale")

            ->setPaginatorPageSize(10);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm()
                ->hideOnIndex(),
            TextareaField::new('Text')
                ->setLabel('Message'),
            BooleanField::new('isPublished')
                ->setLabel('Publier'),
        ];
    }
}

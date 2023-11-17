<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

#[AttributeIsGranted('ROLE_USER')]
class BrandCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brand::class;
    }

    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Marques')
            ->setEntityLabelInSingular('Marques')

            ->setPageTitle("index", "Gestion des marques")
            ->setPageTitle("edit", "Gestion d'une marque")

            ->setPaginatorPageSize(10);
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}

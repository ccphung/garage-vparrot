<?php

namespace App\Controller\Admin;

use App\Entity\Review;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

#[AttributeIsGranted('ROLE_USER')]
class ReviewCrudController extends AbstractCrudController
{
    public function configureCrud(Crud $crud) : Crud 
    {
        return $crud
            ->setEntityLabelInPlural('Avis')
            ->setEntityLabelInSingular('Avis')

            ->setPageTitle("index", "Gestion des avis")
            ->setPageTitle("edit", "Gestion d'un avis")

            ->setPaginatorPageSize(10);
    }

    public static function getEntityFqcn(): string
    {
        return Review::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm()
                ->hideOnIndex(),
            TextField::new('firstName')
                ->setLabel('Prénom'),
            TextField::new('lastName')
                ->setLabel('Nom'),
            ChoiceField::new('rating')
                ->setChoices([
                    '1/5 - Pas du tout satisfait' => 1,
                    '2/5 - Peu satisfait' => 2,
                    '3/5 - Moyennement satisfait' => 3,
                    '4/5 - Satisfait' => 4,
                    '5/5 - Très satisfait' => 5,
                ]),
            TextareaField::new('comment')
                ->setLabel('Commentaire'),
            BooleanField::new('isApproved')
                ->setLabel('Approuvé'),
            BooleanField::new('firstComment')
                ->setLabel('Afficher ce commentaire en premier'),
        ];
    }
}
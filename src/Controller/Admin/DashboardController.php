<?php

namespace App\Controller\Admin;

use App\Entity\Ad;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\OpeningHours;
use App\Entity\Review;
use App\Entity\User;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

class DashboardController extends AbstractDashboardController
{
    #[Route('/espace-administration', name: 'espace-administration')]
    #[AttributeIsGranted('ROLE_USER')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Garage Parrot');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Employé', 'fa-solid fa-person-digging', User::class)
        ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Annonces', 'fa-solid fa-car', Ad::class)
        ->setPermission('ROLE_USER');
        yield MenuItem::linkToCrud('Avis', 'fa-solid fa-book', Review::class)
        ->setPermission('ROLE_USER');
        yield MenuItem::linkToCrud('Horaires d\'ouverture', 'fa-solid fa-calendar-days', OpeningHours::class)
        ->setPermission('ROLE_ADMIN');
    }
}
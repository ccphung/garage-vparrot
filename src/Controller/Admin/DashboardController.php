<?php

namespace App\Controller\Admin;

use App\Entity\Ad;
use App\Entity\Announcement;
use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\OpeningHours;
use App\Entity\Review;
use App\Entity\Service;
use App\Entity\User;
use Symfony\Component\Security\Http\Attribute\IsGranted as AttributeIsGranted;

class DashboardController extends AbstractDashboardController
{
    #[Route('/espace-gestion', name: 'espace-gestion')]
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
        yield MenuItem::linkToCrud('Employés', 'fa-solid fa-person-digging', User::class)
        ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Annonces', 'fa-solid fa-car', Ad::class)
        ->setPermission('ROLE_USER');
        yield MenuItem::linkToCrud('Services', 'fa-solid fa-screwdriver-wrench', Service::class)
        ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Horaires d\'ouverture', 'fa-solid fa-calendar-days', OpeningHours::class)
        ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Avis', 'fa-solid fa-star', Review::class)
        ->setPermission('ROLE_USER');
        yield MenuItem::linkToCrud('Contact', 'fa-solid fa-person', Contact::class)
        ->setPermission('ROLE_USER');
        yield MenuItem::linkToCrud('Annonce spéciale', 'fa-solid fa-triangle-exclamation', Announcement::class)
        ->setPermission('ROLE_ADMIN');
    }
}
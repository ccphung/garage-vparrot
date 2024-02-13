<?php

namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\AnnouncementRepository;
use App\Repository\OpeningHoursRepository;
use App\Repository\ReviewRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ServiceRepository $serviceRepository, OpeningHoursRepository $openingHours, AdRepository $adRepository, ReviewRepository $reviewRepository, AnnouncementRepository $annRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'services' => $serviceRepository->findAll(),
            'horaires' => $openingHours->findOneBy([]),
            'annonces' => $adRepository->findBy([], ['id' => 'asc']),
            'commentaires' => $reviewRepository->findBy(
                ['isApproved' => true, 'firstComment' => false ]),
            'firstComment'=> $reviewRepository->findOneBy(
                ['isApproved' => true, 'firstComment' => true ]),
            'annSpeciales' => $annRepository->findBy([], ['id' => 'asc']),
        ]);
    }
}

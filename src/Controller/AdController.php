<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Repository\AdRepository;
use App\Repository\OpeningHoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdController extends AbstractController
{
    #[Route('/annonces', name: 'app_ad')]
    public function index(OpeningHoursRepository $openingHours, AdRepository $adRepository): Response
    {
        return $this->render('ad/index.html.twig', [
            'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
            'annonces' => $adRepository->findBy([], ['id' => 'asc']),
        ]);
    }

    #[Route('/annonce/{title}', name: 'details')]
    public function details(Ad $ad, OpeningHoursRepository $openingHours): Response
    {
        return $this->render('ad/detail.html.twig', [
            'ad' => $ad,
            'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
        ]);
                
    }
}

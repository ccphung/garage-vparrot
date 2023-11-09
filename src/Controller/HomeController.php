<?php

namespace App\Controller;

use App\Repository\OpeningHoursRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ServiceRepository $serviceRepository, OpeningHoursRepository $openingHours): Response
    {
        return $this->render('home/index.html.twig', [
            'services' => $serviceRepository->findBy([], ['id' => 'asc']),
            'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
        ]);
    }
}

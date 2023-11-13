<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\AdRepository;
use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function details(Ad $ad, OpeningHoursRepository $openingHours, Contact $contact): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
            $this->addFlash(
                'success',
                'Votre message a bien été envoyé'
            );

        return $this->render('ad/detail.html.twig', [
            'ad' => $ad,
            'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
            'form' => $form->createView()
        ]);
                
    }
}

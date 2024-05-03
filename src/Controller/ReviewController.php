<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\AnnouncementRepository;
use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReviewController extends AbstractController
{
    #[Route('/avis', name: 'app_review')]
    public function index(OpeningHoursRepository $openingHours, Request $request, EntityManagerInterface $manager, AnnouncementRepository $annRepository): Response
    {
        $contact = new Review();
        $form = $this->createForm(ReviewType::class, $contact);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $manager->persist($contact);
            $manager->flush();

            $this->addFlash(
                'success',
                'Merci pour votre commentaire'
            );
            unset($form);
            $contact = new Review();
            $form = $this->createForm(ReviewType::class, $contact);
        }

        return $this->render('review/index.html.twig', [
            'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
            'form' => $form->createView(),
            'annSpeciales' => $annRepository->findBy([], ['id' => 'asc'])
        ]);
    }
}

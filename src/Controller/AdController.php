<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\AdRepository;
use App\Repository\BrandRepository;
use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdController extends AbstractController
{
    #[Route('/annonces', name: 'app_ad')]
    public function index(OpeningHoursRepository $openingHours, AdRepository $adRepository, Request $request, BrandRepository $brandRepository): Response
    {
        $filterPrice = $request->get('prices');
        $filterBrand = $request->get('brand');

        if($request->get('ajax')){
            return new JsonResponse([
                'content' => $this->renderView('ad/_content.html.twig', [
                    'annonces' => $adRepository->findByFilter($filterPrice, $filterBrand),
                    'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
                ])
            ]);
        }

        return $this->render('ad/index.html.twig', [
            'brands' => $brandRepository->findAll(),
            'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
            'annonces' => $adRepository->findByFilter($filterPrice, $filterBrand),
        ]);
    }

    #[Route('/annonce/{title}', name: 'details')]
    public function details(Ad $ad, OpeningHoursRepository $openingHours, Contact $contact, Request $request, EntityManagerInterface $manager): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $manager->persist($contact);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre message a bien été envoyé'
            );
            unset($contact);
            unset($form);
            $contact = new Contact();
            $form = $this->createForm(ContactType::class, $contact);
        }
        
        return $this->render('ad/detail.html.twig', [
            'ad' => $ad,
            'horaires' => $openingHours->findOneBy([], ['id' => 'asc']),
            'form' => $form->createView()
        ]);
                
    }
}

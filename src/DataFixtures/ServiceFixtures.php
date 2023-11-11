<?php

namespace App\DataFixtures;

use App\Entity\Service;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            $mecanique = new Service();
            $mecanique->setTitle('Réparation mécanique');
            $mecanique->setContent('Expert en réparation toutes marques, voitures électriques comprises, notre garage automobile est en mesure d’effectuer les différentes réparations');
            $mecanique->setImageName('reparation-meca');
            $mecanique->setPrice('92');
            $mecanique->setImageFile(new UploadedFile('public/images/services/reparation-mecanique.png','reparation-mecanique.png','png', UPLOAD_ERR_OK, true));
            $mecanique->setUpdatedAt(new DateTimeImmutable());
            $manager->persist($mecanique);


            $entretien = new Service();
            $entretien->setTitle('Entretien');
            $entretien->setContent('La révision et la vidange sont des étapes clés dans l’entretien de votre véhicule. Elles préservent votre moteur et en assure sa longévité. Nous vous recommandons d’effectuer une vidange tous les ans ou tous les 15000km.');
            $entretien->setImageName('Entretien');
            $entretien->setPrice('65');
            $entretien->setImageFile(new UploadedFile('public/images/services/entretien.png','entretien.png','png', UPLOAD_ERR_OK, true));
            $entretien->setUpdatedAt(new DateTimeImmutable());
            $manager->persist($entretien);

            $carrosserie = new Service();
            $carrosserie->setTitle('Réparation carrosserie');
            $carrosserie->setContent('Jantes éraflées, griffure sur le tableau de bord ou intérieur de portière, bosse ou rayure sur votre carrosserie voiture…? Confiez nous la réparation carrosserie de votre véhicule.');
            $carrosserie->setImageName('reparation-carrosserie');
            $carrosserie->setPrice('120');
            $carrosserie->setImageFile(new UploadedFile('public/images/services/reparation-carrosserie.png','reparation-carrosserie.png','png', UPLOAD_ERR_OK, true));
            $carrosserie->setUpdatedAt(new DateTimeImmutable());

            $manager->persist($carrosserie);
            $manager->flush();
        }
}

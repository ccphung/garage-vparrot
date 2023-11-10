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
            $mecanique->setContent('Réparation');
            $mecanique->setImageName('Réparation');
            $mecanique->setPrice('80');
            $mecanique->setImageFile(new UploadedFile('public/images/services/entretien.png','entretien.png','png', UPLOAD_ERR_OK, true));
            $mecanique->setUpdatedAt(new DateTimeImmutable());

            $manager->persist($mecanique);
            $manager->flush();
        }
}

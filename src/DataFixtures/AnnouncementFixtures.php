<?php

namespace App\DataFixtures;

use App\Entity\Announcement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnnouncementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ann = new Announcement();
        $ann->setText('OFFRE SPECIALE : -25% SUR LES VIDANGES AVANT LE 31/01/2024');
        $ann->setIsPublished(true);

        $manager->persist($ann);
        $manager->flush();
    }
}
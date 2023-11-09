<?php

namespace App\DataFixtures;

use App\Entity\OpeningHours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OpeningHoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            $openingHours = new OpeningHours();
            $openingHours->setMonAmOpen('08:45');
            $openingHours->setMonAmClose('12:00');
            $openingHours->setMonPmOpen('14:00');
            $openingHours->setMonPmClose('18:00');

            $openingHours->setTueAmOpen('08:45');
            $openingHours->setTueAmClose('12:00');
            $openingHours->setTuePmOpen('14:00');
            $openingHours->setTuePmClose('18:00');

            $openingHours->setWedAmOpen('08:45');
            $openingHours->setWedAmClose('12:00');
            $openingHours->setWedPmOpen('14:00');
            $openingHours->setWedPmClose('18:00');

            $openingHours->setThrAmOpen('08:45');
            $openingHours->setThrAmClose('12:00');
            $openingHours->setThrPmOpen('14:00');
            $openingHours->setThrPmClose('18:00');

            $openingHours->setFriAmOpen('08:45');
            $openingHours->setFriAmClose('12:00');
            $openingHours->setFriPmOpen('14:00');
            $openingHours->setFriPmClose('18:00');

            $openingHours->setSatAmOpen('08:45');
            $openingHours->setSatAmClose('12:00');

            $openingHours->setSun('Fermé');

            $manager->persist($openingHours);
            $manager->flush();
        }
}

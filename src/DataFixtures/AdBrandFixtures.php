<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdBrandFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $bd1 = new Brand();
        $this->addReference('Mazda', $bd1);
        $bd1->setName('Mazda');
        $manager->persist($bd1);

        $bd2 = new Brand();
        $this->addReference('Renault', $bd2);
        $bd2->setName('Renault');
        $manager->persist($bd2);

        $bd3 = new Brand();
        $this->addReference('Peugeot', $bd3);
        $bd3->setName('Peugeot');
        $manager->persist($bd3);

        $bd4 = new Brand();
        $this->addReference('Fiat', $bd4);
        $bd4->setName('Fiat');
        $manager->persist($bd4);

        $bd5 = new Brand();
        $this->addReference('Tesla', $bd5);
        $bd5->setName('Tesla');
        $manager->persist($bd5);

        $bd6 = new Brand();
        $this->addReference('Mercedes', $bd6);
        $bd6->setName('Mercedes');
        $manager->persist($bd6);

        $bd7 = new Brand();
        $this->addReference('Porsche', $bd7);
        $bd7->setName('Porsche');
        $manager->persist($bd7);
        
        $manager->flush();
    }
}
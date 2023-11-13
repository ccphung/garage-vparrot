<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
            for($i = 1; $i <=5; $i++){
                $contact = new Contact();
                $contact->setFirstName($faker->firstName);
                $contact->setLastName($faker->lastName);
                $contact->setEmail($faker->email);
                $contact->setPhoneNumber($faker->phoneNumber);
                $contact->setMessage($faker->sentence);

                $manager->persist($contact);
            }
            $manager->flush();
        }
}

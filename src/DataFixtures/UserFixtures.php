<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher){}
    
    public function load(ObjectManager $manager): void
    {

        $faker = Faker\Factory::create('fr_FR');
        
        $admin = new User();
        $admin->setFirstName('Vincent');
        $admin->setLastName('Parrot');
        $admin->setEmail('vparrot@garageparrot.fr');
        $admin->setPassword(
            $this->passwordHasher->hashPassword($admin, 'V1c3ntP4rr0T5858!'));
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);

        for($i = 1; $i <=10; $i++){
            $employe = new User();
            $employe->setFirstName($faker->firstName);
            $employe->setLastName($faker->lastName);
            $employe->setEmail($faker->email);
            $employe->setPassword(
                $this->passwordHasher->hashPassword($employe, 'secret')
            );
            $manager->persist($employe);
        }

        $manager->flush();
    }
}

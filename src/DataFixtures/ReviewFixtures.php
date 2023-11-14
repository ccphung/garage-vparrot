<?php

namespace App\DataFixtures;

use App\Entity\Review;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ReviewFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $review1 = new Review();
        $review1->setFirstName('Marie');
        $review1->setLastName('Lombard');
        $review1->setRating(4);
        $review1->setComment('Merci à toute l\'équipe');
        $review1->setIsApproved(true);
        $review1->setFirstComment(true);
        $manager->persist($review1);

        $review2 = new Review();
        $review2->setFirstName('Jean');
        $review2->setLastName('Paul');
        $review2->setRating(5);
        $review2->setComment('RAS, tout est parfait');
        $review2->setIsApproved(true);
        $manager->persist($review2);

        $review3 = new Review();
        $review3->setFirstName('Marc');
        $review3->setLastName('Grégoire');
        $review3->setRating(5);
        $review3->setComment('Très content, ma voiture est comme neuve');
        $review3->setIsApproved(true);
        $manager->persist($review3);

        $review4 = new Review();
        $review4->setFirstName('Richard');
        $review4->setLastName('Bertrand');
        $review4->setRating(3);
        $review4->setComment('Un peu cher');
        $review4->setIsApproved(true);
        $manager->persist($review4);

        $review5 = new Review();
        $review5->setFirstName('Marion');
        $review5->setLastName('Cécile');
        $review5->setRating(4);
        $review5->setComment('Ravie du travail effectué');
        $review5->setIsApproved(true);
        $manager->persist($review5);

        $review6 = new Review();
        $review6->setFirstName('Patrick');
        $review6->setLastName('Bastien');
        $review6->setRating(5);
        $review6->setComment('Toujours au top');
        $review6->setIsApproved(true);
        $manager->persist($review6);
        
        $manager->flush();
        }
}
<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use DateTime;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            $ad1 = new Ad();
            $ad1->setTitle('Mazda');
            $ad1->setBrand('Mazda');
            $ad1->setRegistrationYear(new DateTime('12/12/2012'));
            $ad1->setKilometers('12000');
            $ad1->setPrice('18000');
            $ad1->setEnergy('Essence');
            $ad1->setGearcase('Automatique');
            $ad1->setColor('Rouge');
            $ad1->setPower(21);
            $ad1->setDoor('5');
            $ad1->setImageName1('');
            $ad1->setImageName2('');
            $ad1->setImageName3('');
            $ad1->setSize1(0);
            $ad1->setSize2(0);
            $ad1->setSize3(0);
            $ad1->setImageFile1(new UploadedFile('public/images/ads/Mazda/praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad1->setImageFile2(new UploadedFile('public/images/ads/Mazda/jonathan-gallegos-EVk5QOg-8j4-unsplash.jpg',
            'praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad1->setImageFile3(new UploadedFile('public/images/ads/Mazda/ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','obi-pixel8propix-S4M_m4QjY38-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad1->setImageRename1('full-pic');
            $ad1->setImageRename2('top-view');
            $ad1->setImageRename3('rear-view');
            $manager->persist($ad1);

            $ad2 = new Ad();
            $ad2->setTitle('Fiat500');
            $ad2->setBrand('Fiat');
            $ad2->setRegistrationYear(new DateTime('12/12/2017'));
            $ad2->setKilometers('28632');
            $ad2->setPrice('7500');
            $ad2->setEnergy('Essence');
            $ad2->setGearcase('Manuelle');
            $ad2->setColor('Rouge');
            $ad2->setPower(8);
            $ad2->setDoor('3');
            $ad2->setImageName1('');
            $ad2->setImageName2('');
            $ad2->setImageName3('');
            $ad2->setSize1(0);
            $ad2->setSize2(0);
            $ad2->setSize3(0);
            $ad2->setImageFile1(new UploadedFile('public/images/ads/Fiat/giacomo-ghironi-2U-ebb4i_7Q-unsplash.jpg','ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad2->setImageFile2(new UploadedFile('public/images/ads/Fiat/janko-ferlic-doli0TqGBac-unsplash.jpg',
            'praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad2->setImageFile3(new UploadedFile('public/images/ads/Fiat/sean-whelan-VcVItFUI6g0-unsplash.jpg','obi-pixel8propix-S4M_m4QjY38-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad2->setImageRename1('first-pic');
            $ad2->setImageRename2('second-pic');
            $ad2->setImageRename3('thrid-pic');
            $manager->persist($ad2);

            $ad3 = new Ad();
            $ad3->setTitle('Mercedes');
            $ad3->setBrand('Fiat');
            $ad3->setRegistrationYear(new DateTime('03/21/2022'));
            $ad3->setKilometers('8523');
            $ad3->setPrice('32000');
            $ad3->setEnergy('Diesel');
            $ad3->setGearcase('Manuelle');
            $ad3->setColor('Noire');
            $ad3->setPower(35);
            $ad3->setDoor('5');
            $ad3->setImageName1('');
            $ad3->setImageName2('');
            $ad3->setImageName3('');
            $ad3->setSize1(0);
            $ad3->setSize2(0);
            $ad3->setSize3(0);
            $ad3->setImageFile1(new UploadedFile('public/images/ads/Mercedes/mark-tryapichnikov-MllJgoAFTcE-unsplash.jpg','ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad3->setImageFile2(new UploadedFile('public/images/ads/Mercedes/leon-trilk-WP0WuLpQbEU-unsplash.jpg',
            'praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad3->setImageFile3(new UploadedFile('public/images/ads/Mercedes/christian-wiediger-DnUbTwfOX0g-unsplash.jpg','obi-pixel8propix-S4M_m4QjY38-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad3->setImageRename1('first-pic');
            $ad3->setImageRename2('second-pic');
            $ad3->setImageRename3('thrid-pic');
            $manager->persist($ad3);

            $ad4 = new Ad();
            $ad4->setTitle('Peugeot-206');
            $ad4->setBrand('Peugeot');
            $ad4->setRegistrationYear(new DateTime('07/16/2011'));
            $ad4->setKilometers('66230');
            $ad4->setPrice('4900');
            $ad4->setEnergy('Diesel');
            $ad4->setGearcase('Manuelle');
            $ad4->setColor('Noire');
            $ad4->setPower(9);
            $ad4->setDoor('5');
            $ad4->setImageName1('');
            $ad4->setImageName2('');
            $ad4->setImageName3('');
            $ad4->setSize1(0);
            $ad4->setSize2(0);
            $ad4->setSize3(0);
            $ad4->setImageFile1(new UploadedFile('public/images/ads/Peugeot206/alvaro-reyes-Ar87_RWv7Mo-unsplash.jpg','ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad4->setImageFile2(new UploadedFile('public/images/ads/Peugeot206/c-joyful-1OLtI79n7hA-unsplash.jpg',
            'praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad4->setImageFile3(new UploadedFile('public/images/ads/Peugeot206/c-joyful-LXlQtT2xKCU-unsplash.jpg','obi-pixel8propix-S4M_m4QjY38-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad4->setImageRename1('first-pic');
            $ad4->setImageRename2('second-pic');
            $ad4->setImageRename3('thrid-pic');
            $manager->persist($ad4);

            $ad5 = new Ad();
            $ad5->setTitle('Porsche');
            $ad5->setBrand('Porsche');
            $ad5->setRegistrationYear(new DateTime('09/10/2020'));
            $ad5->setKilometers('23651');
            $ad5->setPrice('39500');
            $ad5->setEnergy('Essence');
            $ad5->setGearcase('Automatique');
            $ad5->setColor('Blanche');
            $ad5->setPower(53);
            $ad5->setDoor('3');
            $ad5->setImageName1('');
            $ad5->setImageName2('');
            $ad5->setImageName3('');
            $ad5->setSize1(0);
            $ad5->setSize2(0);
            $ad5->setSize3(0);
            $ad5->setImageFile1(new UploadedFile('public/images/ads/Porsche/or-hakim-0qcexMtNjR4-unsplash.jpg','ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad5->setImageFile2(new UploadedFile('public/images/ads/Porsche/or-hakim-dooqgB_U7UU-unsplash.jpg',
            'praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad5->setImageFile3(new UploadedFile('public/images/ads/Porsche/redcharlie-mugDbuNnbd0-unsplash.jpg','obi-pixel8propix-S4M_m4QjY38-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad5->setImageRename1('first-pic');
            $ad5->setImageRename2('second-pic');
            $ad5->setImageRename3('thrid-pic');
            $manager->persist($ad5);

            $ad6 = new Ad();
            $ad6->setTitle('Renault');
            $ad6->setBrand('Renault');
            $ad6->setRegistrationYear(new DateTime('07/10/2021'));
            $ad6->setKilometers('21520');
            $ad6->setPrice('7500');
            $ad6->setEnergy('Essence');
            $ad6->setGearcase('Automatique');
            $ad6->setColor('Jaune');
            $ad6->setPower(16);
            $ad6->setDoor('5');
            $ad6->setImageName1('');
            $ad6->setImageName2('');
            $ad6->setImageName3('');
            $ad6->setSize1(0);
            $ad6->setSize2(0);
            $ad6->setSize3(0);
            $ad6->setImageFile1(new UploadedFile('public/images/ads/Renault/martin-katler-hb8fkAWx9gc-unsplash.jpg','ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad6->setImageFile2(new UploadedFile('public/images/ads/Renault/peter-varga-P1atr7HJ8Zs-unsplash.jpg',
            'praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad6->setImageFile3(new UploadedFile('public/images/ads/Renault/rafal-jedrzejek-pK2EOfJUZmU-unsplash.jpg','obi-pixel8propix-S4M_m4QjY38-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad6->setImageRename1('first-pic');
            $ad6->setImageRename2('second-pic');
            $ad6->setImageRename3('thrid-pic');
            $manager->persist($ad6);

            $ad7 = new Ad();
            $ad7->setTitle('Tesla');
            $ad7->setBrand('Tesla');
            $ad7->setRegistrationYear(new DateTime('04/02/2022'));
            $ad7->setKilometers('17520');
            $ad7->setPrice('13000');
            $ad7->setEnergy('Electrique');
            $ad7->setGearcase('Automatique');
            $ad7->setColor('Noire');
            $ad7->setPower(25);
            $ad7->setDoor('5');
            $ad7->setImageName1('');
            $ad7->setImageName2('');
            $ad7->setImageName3('');
            $ad7->setSize1(0);
            $ad7->setSize2(0);
            $ad7->setSize3(0);
            $ad7->setImageFile1(new UploadedFile('public/images/ads/Tesla/bram-van-oost-eaPkue76Ip4-unsplash.jpg','ivan-jevtic-oZaPKFFqJ7s-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad7->setImageFile2(new UploadedFile('public/images/ads/Tesla/jp-valery-_s5aRlUXtyg-unsplash.jpg',
            'praswin-prakashan-dGsf8Y0n2d0-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad7->setImageFile3(new UploadedFile('public/images/ads/Tesla/stefan-lehner-jQSNiYd6oUM-unsplash.jpg','obi-pixel8propix-S4M_m4QjY38-unsplash.jpg','jpg', UPLOAD_ERR_OK, true));
            $ad7->setImageRename1('first-pic');
            $ad7->setImageRename2('second-pic');
            $ad7->setImageRename3('thrid-pic');
            $manager->persist($ad7);
            
            $manager->flush();
        }
}

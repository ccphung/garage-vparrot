<?php

namespace App\Entity;

use App\Repository\AdRepository;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: AdRepository::class)]
#[Vich\Uploadable]

#[UniqueEntity('title')]
class Ad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
        
    #[Vich\UploadableField (mapping: 'ads2', fileNameProperty: 'imageName2', size: 'size1')]
    private ?File $imageFile1 = null;

    #[Vich\UploadableField (mapping: 'ads1', fileNameProperty: 'imageName1', size: 'size2')]
    private ?File $imageFile2 = null;

    #[Vich\UploadableField (mapping: 'ads3', fileNameProperty: 'imageName3', size: 'size3')]
    private ?File $imageFile3 = null;


    #[ORM\Column(length: 255, unique:true)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $registrationYear = null;

    #[ORM\Column]
    private ?int $kilometers = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\ManyToOne(inversedBy: 'ad')]
    private ?User $user = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt1 = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt2 = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt3 = null;

    #[ORM\Column(length: 255)]
    private ?string $imageName1 = null;

    #[ORM\Column(length: 255)]
    private ?string $imageName2 = null;

    #[ORM\Column(length: 255)]
    private ?string $imageName3 = null;

    #[ORM\Column]
    private ?int $size1 = null;

    #[ORM\Column]
    private ?int $size2 = null;

    #[ORM\Column]
    private ?int $size3 = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $imageRename1 = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $imageRename2 = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $imageRename3 = null;

    #[ORM\Column(length: 255)]
    private ?string $gearcase = null;

    #[ORM\Column]
    private ?int $door = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    #[ORM\Column]
    private ?int $power = null;

    #[ORM\Column(length: 255)]
    private ?string $energy = null;

    #[ORM\Column(nullable: true)]
    private ?bool $gps = null;

    #[ORM\Column(nullable: true)]
    private ?bool $airConditioner = null;

    #[ORM\Column(nullable: true)]
    private ?bool $reversingCamera = null;

    #[ORM\Column(nullable: true)]
    private ?bool $androidAuto = null;

    #[ORM\Column(nullable: true)]
    private ?bool $speedRegulator = null;

    #[ORM\ManyToOne(inversedBy: 'ad')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Brand $brand = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setImageFile1(?File $imageFile1) : void
    {
        $this->imageFile1 = $imageFile1;
        $this->updatedAt1 = new \DateTimeImmutable();
    }

    
    public function setImageFile2(?File $imageFile2) : void
    {
        $this->imageFile2 = $imageFile2;
        $this->updatedAt2 = new \DateTimeImmutable();
    }

    public function setImageFile3(?File $imageFile3) : void
    {
        $this->imageFile3 = $imageFile3;
        $this->updatedAt3 = new \DateTimeImmutable();
    }

    public function getImageFile1(): ?File {
        return $this->imageFile1;
    }

    public function getImageFile2(): ?File {
        return $this->imageFile2;
    }

    public function getImageFile3(): ?File {
        return $this->imageFile3;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = preg_replace('/\s+/', '-',strtolower($title));

        return $this;
    }

    public function getRegistrationYear(): ?\DateTimeInterface
    {
        return $this->registrationYear;
    }

    public function setRegistrationYear(\DateTimeInterface $registrationYear): static
    {
        $this->registrationYear = $registrationYear;

        return $this;
    }

    public function getKilometers(): ?int
    {
        return $this->kilometers;
    }

    public function setKilometers(int $kilometers): static
    {
        $this->kilometers = $kilometers;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function __construct() {
        $this->setCreatedAt(new DateTimeImmutable());
        $this->setAirConditioner(false);
        $this->setAndroidAuto(false);
        $this->setGps(false);
        $this->setReversingCamera(false);
        $this->setSpeedRegulator(false);
        $this->setImageRename1("first-pic");
        $this->setImageRename2("second-pic");
        $this->setImageRename3("thrid-pic");
    }

    public function getImageName1(): ?string
    {
        return $this->imageName1;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }
    
    public function getImageName3(): ?string
    {
        return $this->imageName3;
    }

    public function setImageName1(?string $imageName1): static
    {
        $this->imageName1 = $imageName1;

        return $this;
    }

    public function setImageName2(?string $imageName2): static
    {
        $this->imageName2 = $imageName2;

        return $this;
    }

    public function setImageName3(?string $imageName3): static
    {
        $this->imageName3 = $imageName3;

        return $this;
    }
    
    public function getSize1(): ?int
    {
        return $this->size1;
    }

    public function getSize2(): ?int
    {
        return $this->size2;
    }

    public function getSize3(): ?int
    {
        return $this->size3;
    }

    public function setSize1(?int $size1): static
    {
        $this->size1 = $size1;

        return $this;
    }

    public function setSize2(?int $size2): static
    {
        $this->size2 = $size2;

        return $this;
    }

    public function setSize3(?int $size3): static
    {
        $this->size3 = $size3;

        return $this;
    }

    public function getUpdatedAt1(): ?\DateTimeImmutable
    {
        return $this->updatedAt1;
    }

    public function getUpdatedAt2(): ?\DateTimeImmutable
    {
        return $this->updatedAt2;
    }

    public function getUpdatedAt3(): ?\DateTimeImmutable
    {
        return $this->updatedAt3;
    }
    
    public function setUpdatedAt1(?\DateTimeImmutable $updatedAt1): static
    {
        $this->updatedAt1 = $updatedAt1;

        return $this;
    }

    public function setUpdatedAt2(?\DateTimeImmutable $updatedAt2): static
    {
        $this->updatedAt2 = $updatedAt2;

        return $this;
    }

    public function setUpdatedAt3 (?\DateTimeImmutable $updatedAt3): static
    {
        $this->updatedAt3 = $updatedAt3;

        return $this;
    }

    public function getImageRename1(): ?string
    {
        return $this->imageRename1;
    }

    public function setImageRename1(?string $imageRename1): static
    {
        $this->imageRename1 = $imageRename1;

        return $this;
    }

    public function getImageRename2(): ?string
    {
        return $this->imageRename2;
    }

    public function setImageRename2(?string $imageRename2): static
    {
        $this->imageRename2 = $imageRename2;

        return $this;
    }

    public function getImageRename3(): ?string
    {
        return $this->imageRename3;
    }

    public function setImageRename3(?string $imageRename3): static
    {
        $this->imageRename3 = $imageRename3;

        return $this;
    }

    public function getGearcase(): ?string
    {
        return $this->gearcase;
    }

    public function setGearcase(string $gearcase): static
    {
        $this->gearcase = $gearcase;

        return $this;
    }

    public function getDoor(): ?int
    {
        return $this->door;
    }

    public function setDoor(int $door): static
    {
        $this->door = $door;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(int $power): static
    {
        $this->power = $power;

        return $this;
    }

    public function getEnergy(): ?string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): static
    {
        $this->energy = $energy;

        return $this;
    }

    public function isGps(): ?bool
    {
        return $this->gps;
    }

    public function setGps(?bool $gps): static
    {
        $this->gps = $gps;

        return $this;
    }

    public function isAirConditioner(): ?bool
    {
        return $this->airConditioner;
    }

    public function setAirConditioner(?bool $airConditioner): static
    {
        $this->airConditioner = $airConditioner;

        return $this;
    }

    public function isReversingCamera(): ?bool
    {
        return $this->reversingCamera;
    }

    public function setReversingCamera(?bool $reversingCamera): static
    {
        $this->reversingCamera = $reversingCamera;

        return $this;
    }

    public function isAndroidAuto(): ?bool
    {
        return $this->androidAuto;
    }

    public function setAndroidAuto(?bool $androidAuto): static
    {
        $this->androidAuto = $androidAuto;

        return $this;
    }

    public function isSpeedRegulator(): ?bool
    {
        return $this->speedRegulator;
    }

    public function setSpeedRegulator(?bool $speedRegulator): static
    {
        $this->speedRegulator = $speedRegulator;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): static
    {
        $this->brand = $brand;

        return $this;
    }
}



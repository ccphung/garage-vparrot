<?php

namespace App\Entity;

use App\Repository\AdRepository;
use ArrayAccess;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: AdRepository::class)]
#[Vich\Uploadable]

class Ad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[Vich\UploadableField (mapping: 'ads', fileNameProperty: 'imageName2', size: 'size2')]
    private ?File $imageFile2 = null;
        
    #[Vich\UploadableField (mapping: 'ads', fileNameProperty: 'imageName1', size: 'size1')]
    private ?File $imageFile1 = null;


    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $brand = null;

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

    #[ORM\Column(length: 255)]
    private ?string $imageName1 = null;

    #[ORM\Column]
    private ?int $size1 = null;

    #[ORM\Column(length: 255)]
    private ?string $imageName2 = null;

    #[ORM\Column]
    private ?int $size2 = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setImageFile1(?File $imageFile1) : void
    {
        $this->imageFile1 = $imageFile1;
        $this->updatedAt1 = new \DateTimeImmutable();
    }

    public function getImageFile1(): ?File {
        return $this->imageFile1;
    }

    public function setImageFile2(?File $imageFile2) : void
    {
        $this->imageFile2 = $imageFile2;
        $this->updatedAt2 = new \DateTimeImmutable();
    }

    public function getImageFile2(): ?File {
        return $this->imageFile2;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

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
    }

    public function getImageName1(): ?string
    {
        return $this->imageName1;
    }

    public function setImageName1(?string $imageName1): static
    {
        $this->imageName1 = $imageName1;

        return $this;
    }

    public function getSize1(): ?int
    {
        return $this->size1;
    }

    public function setSize1(?int $size1): static
    {
        $this->size1 = $size1;

        return $this;
    }

    public function getUpdatedAt1(): ?\DateTimeImmutable
    {
        return $this->updatedAt1;
    }

    public function setUpdatedAt1(\DateTimeImmutable $updatedAt1): static
    {
        $this->updatedAt1 = $updatedAt1;

        return $this;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function setImageName2(?string $imageName2): static
    {
        $this->imageName2 = $imageName2;

        return $this;
    }

    public function getSize2(): ?int
    {
        return $this->size2;
    }

    public function setSize2(?int $size2): static
    {
        $this->size2 = $size2;

        return $this;
    }

    public function getUpdatedAt2(): ?\DateTimeImmutable
    {
        return $this->updatedAt2;
    }

    public function setUpdatedAt2(\DateTimeImmutable $updatedAt2): static
    {
        $this->updatedAt2 = $updatedAt2;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

}

class Adpic extends Ad {
    
}
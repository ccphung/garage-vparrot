<?php

namespace App\Entity;

use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningHoursRepository::class)]
class OpeningHours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 5)]
    private ?string $mon_am_open = null;

    #[ORM\Column(length: 5)]
    private ?string $mon_am_close = null;

    #[ORM\Column(length: 5)]
    private ?string $mon_pm_open = null;

    #[ORM\Column(length: 5)]
    private ?string $mon_pm_close = null;

    #[ORM\Column(length: 5)]
    private ?string $tue_am_open = null;

    #[ORM\Column(length: 5)]
    private ?string $tue_am_close = null;

    #[ORM\Column(length: 5)]
    private ?string $tue_pm_open = null;

    #[ORM\Column(length: 5)]
    private ?string $tue_pm_close = null;

    #[ORM\Column(length: 5)]
    private ?string $wed_am_open = null;

    #[ORM\Column(length: 5)]
    private ?string $wed_am_close = null;

    #[ORM\Column(length: 5)]
    private ?string $wed_pm_open = null;

    #[ORM\Column(length: 5)]
    private ?string $wed_pm_close = null;

    #[ORM\Column(length: 5)]
    private ?string $thr_am_open = null;

    #[ORM\Column(length: 5)]
    private ?string $thr_am_close = null;

    #[ORM\Column(length: 5)]
    private ?string $thr_pm_open = null;

    #[ORM\Column(length: 5)]
    private ?string $thr_pm_close = null;

    #[ORM\Column(length: 5)]
    private ?string $fri_am_open = null;

    #[ORM\Column(length: 5)]
    private ?string $fri_am_close = null;

    #[ORM\Column(length: 5)]
    private ?string $fri_pm_open = null;

    #[ORM\Column(length: 5)]
    private ?string $fri_pm_close = null;

    #[ORM\Column(length: 5)]
    private ?string $sat_am_open = null;

    #[ORM\Column(length: 5)]
    private ?string $sat_am_close = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $sat_pm_open = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $sat_pm_close = null;

    #[ORM\Column(length: 10)]
    private ?string $sun = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?user $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonAmOpen(): ?string
    {
        return $this->mon_am_open;
    }

    public function setMonAmOpen(string $mon_am_open): static
    {
        $this->mon_am_open = $mon_am_open;

        return $this;
    }

    public function getMonAmClose(): ?string
    {
        return $this->mon_am_close;
    }

    public function setMonAmClose(string $mon_am_close): static
    {
        $this->mon_am_close = $mon_am_close;

        return $this;
    }

    public function getMonPmOpen(): ?string
    {
        return $this->mon_pm_open;
    }

    public function setMonPmOpen(string $mon_pm_open): static
    {
        $this->mon_pm_open = $mon_pm_open;

        return $this;
    }

    public function getMonPmClose(): ?string
    {
        return $this->mon_pm_close;
    }

    public function setMonPmClose(string $mon_pm_close): static
    {
        $this->mon_pm_close = $mon_pm_close;

        return $this;
    }

    public function getTueAmOpen(): ?string
    {
        return $this->tue_am_open;
    }

    public function setTueAmOpen(string $tue_am_open): static
    {
        $this->tue_am_open = $tue_am_open;

        return $this;
    }

    public function getTueAmClose(): ?string
    {
        return $this->tue_am_close;
    }

    public function setTueAmClose(string $tue_am_close): static
    {
        $this->tue_am_close = $tue_am_close;

        return $this;
    }

    public function getTuePmOpen(): ?string
    {
        return $this->tue_pm_open;
    }

    public function setTuePmOpen(string $tue_pm_open): static
    {
        $this->tue_pm_open = $tue_pm_open;

        return $this;
    }

    public function getTuePmClose(): ?string
    {
        return $this->tue_pm_close;
    }

    public function setTuePmClose(string $tue_pm_close): static
    {
        $this->tue_pm_close = $tue_pm_close;

        return $this;
    }

    public function getWedAmOpen(): ?string
    {
        return $this->wed_am_open;
    }

    public function setWedAmOpen(string $wed_am_open): static
    {
        $this->wed_am_open = $wed_am_open;

        return $this;
    }

    public function getWedAmClose(): ?string
    {
        return $this->wed_am_close;
    }

    public function setWedAmClose(string $wed_am_close): static
    {
        $this->wed_am_close = $wed_am_close;

        return $this;
    }

    public function getWedPmOpen(): ?string
    {
        return $this->wed_pm_open;
    }

    public function setWedPmOpen(string $wed_pm_open): static
    {
        $this->wed_pm_open = $wed_pm_open;

        return $this;
    }

    public function getWedPmClose(): ?string
    {
        return $this->wed_pm_close;
    }

    public function setWedPmClose(string $wed_pm_close): static
    {
        $this->wed_pm_close = $wed_pm_close;

        return $this;
    }

    public function getThrAmOpen(): ?string
    {
        return $this->thr_am_open;
    }

    public function setThrAmOpen(string $thr_am_open): static
    {
        $this->thr_am_open = $thr_am_open;

        return $this;
    }

    public function getThrAmClose(): ?string
    {
        return $this->thr_am_close;
    }

    public function setThrAmClose(string $thr_am_close): static
    {
        $this->thr_am_close = $thr_am_close;

        return $this;
    }

    public function getThrPmOpen(): ?string
    {
        return $this->thr_pm_open;
    }

    public function setThrPmOpen(string $thr_pm_open): static
    {
        $this->thr_pm_open = $thr_pm_open;

        return $this;
    }

    public function getThrPmClose(): ?string
    {
        return $this->thr_pm_close;
    }

    public function setThrPmClose(string $thr_pm_close): static
    {
        $this->thr_pm_close = $thr_pm_close;

        return $this;
    }

    public function getFriAmOpen(): ?string
    {
        return $this->fri_am_open;
    }

    public function setFriAmOpen(string $fri_am_open): static
    {
        $this->fri_am_open = $fri_am_open;

        return $this;
    }

    public function getFriAmClose(): ?string
    {
        return $this->fri_am_close;
    }

    public function setFriAmClose(string $fri_am_close): static
    {
        $this->fri_am_close = $fri_am_close;

        return $this;
    }

    public function getFriPmOpen(): ?string
    {
        return $this->fri_pm_open;
    }

    public function setFriPmOpen(string $fri_pm_open): static
    {
        $this->fri_pm_open = $fri_pm_open;

        return $this;
    }

    public function getFriPmClose(): ?string
    {
        return $this->fri_pm_close;
    }

    public function setFriPmClose(string $fri_pm_close): static
    {
        $this->fri_pm_close = $fri_pm_close;

        return $this;
    }

    public function getSatAmOpen(): ?string
    {
        return $this->sat_am_open;
    }

    public function setSatAmOpen(string $sat_am_open): static
    {
        $this->sat_am_open = $sat_am_open;

        return $this;
    }

    public function getSatAmClose(): ?string
    {
        return $this->sat_am_close;
    }

    public function setSatAmClose(string $sat_am_close): static
    {
        $this->sat_am_close = $sat_am_close;

        return $this;
    }

    public function getSatPmOpen(): ?string
    {
        return $this->sat_pm_open;
    }

    public function setSatPmOpen(?string $sat_pm_open): static
    {
        $this->sat_pm_open = $sat_pm_open;

        return $this;
    }

    public function getSatPmClose(): ?string
    {
        return $this->sat_pm_close;
    }

    public function setSatPmClose(?string $sat_pm_close): static
    {
        $this->sat_pm_close = $sat_pm_close;

        return $this;
    }

    public function getSun(): ?string
    {
        return $this->sun;
    }

    public function setSun(string $sun): static
    {
        $this->sun = $sun;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): static
    {
        $this->user = $user;

        return $this;
    }
}

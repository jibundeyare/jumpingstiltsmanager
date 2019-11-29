<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LendingRepository")
 */
class Lending
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $startDate;

    /**
     * @ORM\Column(type="date")
     */
    private $endDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Riser", inversedBy="lendings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $riser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\JumpingTilt", inversedBy="lendings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jumpingTilt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getRiser(): ?Riser
    {
        return $this->riser;
    }

    public function setRiser(?Riser $riser): self
    {
        $this->riser = $riser;

        return $this;
    }

    public function getJumpingTilt(): ?JumpingTilt
    {
        return $this->jumpingTilt;
    }

    public function setJumpingTilt(?JumpingTilt $jumpingTilt): self
    {
        $this->jumpingTilt = $jumpingTilt;

        return $this;
    }
}
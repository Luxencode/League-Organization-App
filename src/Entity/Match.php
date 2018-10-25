<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchRepository")
 */
class Match
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team")
     * @ORM\JoinColumn(nullable=false)
     */
    private $local;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team")
     * @ORM\JoinColumn(nullable=false)
     */
    private $visitor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MatchDay", inversedBy="season")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matchday;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLocal(): ?Team
    {
        return $this->local;
    }

    public function setLocal(?Team $local): self
    {
        $this->local = $local;

        return $this;
    }

    public function getVisitor(): ?Team
    {
        return $this->visitor;
    }

    public function setVisitor(?Team $visitor): self
    {
        $this->visitor = $visitor;

        return $this;
    }

    public function getMatchday(): ?MatchDay
    {
        return $this->matchday;
    }

    public function setMatchday(?MatchDay $matchday): self
    {
        $this->matchday = $matchday;

        return $this;
    }
}

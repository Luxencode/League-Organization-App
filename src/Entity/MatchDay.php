<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchDayRepository")
 */
class MatchDay
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Match", mappedBy="matchday", orphanRemoval=true)
     */
    private $season;

    public function __construct()
    {
        $this->season = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Match[]
     */
    public function getSeason(): Collection
    {
        return $this->season;
    }

    public function addSeason(Match $season): self
    {
        if (!$this->season->contains($season)) {
            $this->season[] = $season;
            $season->setMatchday($this);
        }

        return $this;
    }

    public function removeSeason(Match $season): self
    {
        if ($this->season->contains($season)) {
            $this->season->removeElement($season);
            // set the owning side to null (unless already changed)
            if ($season->getMatchday() === $this) {
                $season->setMatchday(null);
            }
        }

        return $this;
    }
}

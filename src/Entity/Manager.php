<?php

namespace App\Entity;

use App\Repository\ManagerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ManagerRepository::class)]
class Manager
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Venue $Event = null;

    #[ORM\ManyToOne(inversedBy: 'managers')]
    private ?Event $Venue = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Venue
    {
        return $this->Event;
    }

    public function setEvent(?Venue $Event): static
    {
        $this->Event = $Event;

        return $this;
    }

    public function getVenue(): ?Event
    {
        return $this->Venue;
    }

    public function setVenue(?Event $Venue): static
    {
        $this->Venue = $Venue;

        return $this;
    }
}

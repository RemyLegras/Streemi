<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie extends Media
{
    // #[ORM\Column(type: "integer")]
    // private ?int $duration = null;


    // public function getDuration(): ?int
    // {
    //     return $this->duration;
    // }

    // public function setDuration(int $duration): static
    // {
    //     $this->duration = $duration;

    //     return $this;
    // }
}
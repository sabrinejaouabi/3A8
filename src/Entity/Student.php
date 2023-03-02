<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\Column(length: 255)]
    private ?string $nsc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'students')]
    private ?Classroom $Classroom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNsc(): ?string
    {
        return $this->nsc;
    }

    public function setNsc(string $nsc): self
    {
        $this->nsc = $nsc;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getClassroom(): ?Classroom
    {
        return $this->Classroom;
    }

    public function setClassroom(?Classroom $Classroom): self
    {
        $this->Classroom = $Classroom;

        return $this;
    }
}

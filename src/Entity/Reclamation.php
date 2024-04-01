<?php

namespace App\Entity;
use Doctrine\DBAL\Types\Types;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReclamationRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass:ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private  ?int $idr = null;

   
    #[ORM\Column]
    private ?int $idu = null;

    
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $temp;

   
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"champ obligatoire")]
    #[Assert\Length(max:500,maxMessage:"le titre ne doit pas depasser 50 caractaire")]
    private ?string $titrer = null;

   
    #[ORM\Column(length: 65535)]
    #[Assert\NotBlank(message:"champ obligatoire")]
    #[Assert\Length(min:10,minMessage:"reclamation trop courte",max:500,maxMessage:"reclamation trop long")]
    private ?string $contenu = null;

   
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"champ obligatoire")]
    private ?string $typer = null;

  
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"champ obligatoire")]
    private ?string $apropo = null;

    public function getIdr(): ?int
    {
        return $this->idr;
    }

    public function getIdu(): ?int
    {
        return $this->idu;
    }

    public function setIdu(int $idu): static
    {
        $this->idu = $idu;

        return $this;
    }

    public function getTemp(): ?\DateTimeInterface
    {
        return $this->temp;
    }

    public function setTemp(\DateTimeInterface $temp): static
    {
        $this->temp = $temp;

        return $this;
    }

    public function getTitrer(): ?string
    {
        return $this->titrer;
    }

    public function setTitrer(string $titrer): static
    {
        $this->titrer = $titrer;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getTyper(): ?string
    {
        return $this->typer;
    }

    public function setTyper(string $typer): static
    {
        $this->typer = $typer;

        return $this;
    }

    public function getApropo(): ?string
    {
        return $this->apropo;
    }

    public function setApropo(string $apropo): static
    {
        $this->apropo = $apropo;

        return $this;
    }


}

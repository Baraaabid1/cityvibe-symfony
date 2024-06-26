<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;


use App\Repository\ReponserRepository;


#[ORM\Entity(repositoryClass:ReponserRepository::class)]
class Reponser
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idrr = null;


    #[ORM\Column]
    private ?int $idu = null;

   
    #[ORM\Column(length: 65535)]
    #[Assert\NotBlank(message:"champ obligatoire")]
    #[Assert\Length(max:30,maxMessage:"Votre message est trop long ")]
    private ?string $textr = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $dateRepr;

    #[ORM\ManyToOne(targetEntity: Reclamation::class, inversedBy: 'reponser')]
    #[ORM\JoinColumn(name: "idR", referencedColumnName: "idR")]
    private ?Reclamation $idR;

    public function getIdrr(): ?int
    {
        return $this->idrr;
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

    public function getTextr(): ?string
    {
        return $this->textr;
    }

    public function setTextr(string $textr): static
    {
        $this->textr = $textr;

        return $this;
    }

    public function getDateRepr(): ?\DateTimeInterface
    {
        return $this->dateRepr;
    }

    public function setDateRepr(\DateTimeInterface $dateRepr): static
    {
        $this->dateRepr = $dateRepr;

        return $this;
    }

    public function getIdR(): ?Reclamation
    {
        return $this->idR;
    }

    public function setIdR(?Reclamation $idR): static
    {
        $this->idR = $idR;

        return $this;
    }


}


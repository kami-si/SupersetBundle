<?php

namespace Hydra\SupersetBundle\Entity;

use Hydra\SupersetBundle\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaysRepository::class)]
class Pays
{
    #[ORM\GeneratedValue]
    #[ORM\Column(unique: true)]
    private ?int $code = null;

    #[ORM\Id]
    #[ORM\Column(length: 2)]
    private ?string $alpha2 = null;

    #[ORM\Column(length: 3, unique: true)]
    private ?string $alpha3 = null;

    #[ORM\Column(length: 45)]
    private ?string $nomEnGb = null;

    #[ORM\Column(length: 45)]
    private ?string $nomFrFr = null;

    /**
     * @var Collection<int, Caop>
     */
    #[ORM\OneToMany(targetEntity: Caop::class, mappedBy: 'madeIn')]
    private Collection $madeInCaops;

    #[ORM\OneToMany(targetEntity: Caop::class, mappedBy: 'pays')]
    private Collection $paysCaops;

    public function __construct()
    {
        $this->madeInCaops = new ArrayCollection();
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getAlpha2(): ?string
    {
        return $this->alpha2;
    }

    public function setAlpha2(string $alpha2): static
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    public function getAlpha3(): ?string
    {
        return $this->alpha3;
    }

    public function setAlpha3(string $alpha3): static
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    public function getNomEnGb(): ?string
    {
        return $this->nomEnGb;
    }

    public function setNomEnGb(string $nomEnGb): static
    {
        $this->nomEnGb = $nomEnGb;

        return $this;
    }

    public function getNomFrFr(): ?string
    {
        return $this->nomFrFr;
    }

    public function setNomFrFr(string $nomFrFr): static
    {
        $this->nomFrFr = $nomFrFr;

        return $this;
    }

    /**
     * @return Collection<int, Caop>
     */
    public function getMadeInCaops(): Collection
    {
        return $this->madeInCaops;
    }

    public function addMadeInCaop(Caop $madeInCaop): static
    {
        if (!$this->madeInCaops->contains($madeInCaop)) {
            $this->madeInCaops->add($madeInCaop);
            $madeInCaop->setMadeIn($this);
        }

        return $this;
    }

    public function removeMadeInCaop(Caop $madeInCaop): static
    {
        if ($this->madeInCaops->removeElement($madeInCaop)) {
            // set the owning side to null (unless already changed)
            if ($madeInCaop->getMadeIn() === $this) {
                $madeInCaop->setMadeIn(null);
            }
        }

        return $this;
    }
}

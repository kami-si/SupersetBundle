<?php

namespace Hydra\SupersetBundle\Entity;

use Hydra\SupersetBundle\Repository\CaopRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaopRepository::class)]
class Caop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $lp = null;

    #[ORM\Column(length: 255)]
    private ?string $saisVente = null;

    #[ORM\Column(length: 255)]
    private ?string $magasinPfApresBp = null;

    #[ORM\ManyToOne(targetEntity: Pays::class, inversedBy: 'madeInCaops')]
    #[ORM\JoinColumn(name: 'made_in', referencedColumnName: 'alpha2', nullable: false)]
    private ?Pays $madeIn = null;

    #[ORM\ManyToOne(targetEntity: Pays::class, inversedBy: 'paysCaops')]
    #[ORM\JoinColumn(name: 'pays', referencedColumnName: 'alpha2', nullable: false)]
    private ?Pays $pays = null;

    #[ORM\Column]
    private ?int $qte = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $brutDevise = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montantEnDevise = null;

    #[ORM\Column(length: 255)]
    private ?string $devisePiece = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montantEnEuro = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $brutEuro = null;

    #[ORM\Column(length: 255)]
    private ?string $deviseEuro = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePiece = null;

    #[ORM\Column(length: 255)]
    private ?string $typeDoc = null;

    #[ORM\Column]
    private ?int $noPiece = null;

    #[ORM\Column(length: 255)]
    private ?string $forme = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(length: 255)]
    private ?string $tpConso = null;

    #[ORM\Column(length: 255)]
    private ?string $ligneExt = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $puBrutEur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $puBrutDev = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groupe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getLp(): ?string
    {
        return $this->lp;
    }

    public function setLp(string $lp): static
    {
        $this->lp = $lp;

        return $this;
    }

    public function getSaisVente(): ?string
    {
        return $this->saisVente;
    }

    public function setSaisVente(string $saisVente): static
    {
        $this->saisVente = $saisVente;

        return $this;
    }

    public function getMagasinPfApresBp(): ?string
    {
        return $this->magasinPfApresBp;
    }

    public function setMagasinPfApresBp(string $magasinPfApresBp): static
    {
        $this->magasinPfApresBp = $magasinPfApresBp;

        return $this;
    }

    public function getMadeIn(): ?Pays
    {
        return $this->madeIn;
    }

    public function setMadeIn(?Pays $madeIn): static
    {
        $this->madeIn = $madeIn;

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): static
    {
        $this->qte = $qte;

        return $this;
    }

    public function getBrutDevise(): ?string
    {
        return $this->brutDevise;
    }

    public function setBrutDevise(string $brutDevise): static
    {
        $this->brutDevise = $brutDevise;

        return $this;
    }

    public function getMontantEnDevise(): ?string
    {
        return $this->montantEnDevise;
    }

    public function setMontantEnDevise(string $montantEnDevise): static
    {
        $this->montantEnDevise = $montantEnDevise;

        return $this;
    }

    public function getDevisePiece(): ?string
    {
        return $this->devisePiece;
    }

    public function setDevisePiece(string $devisePiece): static
    {
        $this->devisePiece = $devisePiece;

        return $this;
    }

    public function getMontantEnEuro(): ?string
    {
        return $this->montantEnEuro;
    }

    public function setMontantEnEuro(string $montantEnEuro): static
    {
        $this->montantEnEuro = $montantEnEuro;

        return $this;
    }

    public function getBrutEuro(): ?string
    {
        return $this->brutEuro;
    }

    public function setBrutEuro(string $brutEuro): static
    {
        $this->brutEuro = $brutEuro;

        return $this;
    }

    public function getDeviseEuro(): ?string
    {
        return $this->deviseEuro;
    }

    public function setDeviseEuro(string $deviseEuro): static
    {
        $this->deviseEuro = $deviseEuro;

        return $this;
    }

    public function getDatePiece(): ?\DateTimeInterface
    {
        return $this->datePiece;
    }

    public function setDatePiece(\DateTimeInterface $datePiece): static
    {
        $this->datePiece = $datePiece;

        return $this;
    }

    public function getTypeDoc(): ?string
    {
        return $this->typeDoc;
    }

    public function setTypeDoc(string $typeDoc): static
    {
        $this->typeDoc = $typeDoc;

        return $this;
    }

    public function getNoPiece(): ?int
    {
        return $this->noPiece;
    }

    public function setNoPiece(int $noPiece): static
    {
        $this->noPiece = $noPiece;

        return $this;
    }

    public function getForme(): ?string
    {
        return $this->forme;
    }

    public function setForme(string $forme): static
    {
        $this->forme = $forme;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getTpConso(): ?string
    {
        return $this->tpConso;
    }

    public function setTpConso(string $tpConso): static
    {
        $this->tpConso = $tpConso;

        return $this;
    }

    public function getLigneExt(): ?string
    {
        return $this->ligneExt;
    }

    public function setLigneExt(string $ligneExt): static
    {
        $this->ligneExt = $ligneExt;

        return $this;
    }

    public function getPuBrutEur(): ?string
    {
        return $this->puBrutEur;
    }

    public function setPuBrutEur(string $puBrutEur): static
    {
        $this->puBrutEur = $puBrutEur;

        return $this;
    }

    public function getPuBrutDev(): ?string
    {
        return $this->puBrutDev;
    }

    public function setPuBrutDev(string $puBrutDev): static
    {
        $this->puBrutDev = $puBrutDev;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(?string $groupe): static
    {
        $this->groupe = $groupe;

        return $this;
    }
}

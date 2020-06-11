<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $raison_social;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse_commerce;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email_commerce;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $tel_commerce;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $regate_ppdc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date_debut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ref_benefiaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_prenom_rais;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieu_remise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numero_cp_couloir;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle_voie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comp_commune_servicepostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cp_cl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $localite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $acce_benefiaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $indic_complementaire;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $frais;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $premier_necessite;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $sec;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nombre_objet;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tel_cli;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaires;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type_livraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRaisonSocial(): ?string
    {
        return $this->raison_social;
    }

    public function setRaisonSocial(?string $raison_social): self
    {
        $this->raison_social = $raison_social;

        return $this;
    }

    public function getAdresseCommerce(): ?string
    {
        return $this->adresse_commerce;
    }

    public function setAdresseCommerce(?string $adresse_commerce): self
    {
        $this->adresse_commerce = $adresse_commerce;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getEmailCommerce(): ?string
    {
        return $this->email_commerce;
    }

    public function setEmailCommerce(?string $email_commerce): self
    {
        $this->email_commerce = $email_commerce;

        return $this;
    }

    public function getTelCommerce(): ?string
    {
        return $this->tel_commerce;
    }

    public function setTelCommerce(?string $tel_commerce): self
    {
        $this->tel_commerce = $tel_commerce;

        return $this;
    }

    public function getRegatePpdc(): ?int
    {
        return $this->regate_ppdc;
    }

    public function setRegatePpdc(?int $regate_ppdc): self
    {
        $this->regate_ppdc = $regate_ppdc;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getDateDebut(): ?string
    {
        return $this->date_debut;
    }

    public function setDateDebut(?string $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getRefBenefiaire(): ?string
    {
        return $this->ref_benefiaire;
    }

    public function setRefBenefiaire(?string $ref_benefiaire): self
    {
        $this->ref_benefiaire = $ref_benefiaire;

        return $this;
    }

    public function getNomPrenomRais(): ?string
    {
        return $this->nom_prenom_rais;
    }

    public function setNomPrenomRais(?string $nom_prenom_rais): self
    {
        $this->nom_prenom_rais = $nom_prenom_rais;

        return $this;
    }

    public function getLieuRemise(): ?string
    {
        return $this->lieu_remise;
    }

    public function setLieuRemise(?string $lieu_remise): self
    {
        $this->lieu_remise = $lieu_remise;

        return $this;
    }

    public function getNumeroCpCouloir(): ?string
    {
        return $this->numero_cp_couloir;
    }

    public function setNumeroCpCouloir(?string $numero_cp_couloir): self
    {
        $this->numero_cp_couloir = $numero_cp_couloir;

        return $this;
    }

    public function getLibelleVoie(): ?string
    {
        return $this->libelle_voie;
    }

    public function setLibelleVoie(?string $libelle_voie): self
    {
        $this->libelle_voie = $libelle_voie;

        return $this;
    }

    public function getCompCommuneServicepostal(): ?string
    {
        return $this->comp_commune_servicepostal;
    }

    public function setCompCommuneServicepostal(?string $comp_commune_servicepostal): self
    {
        $this->comp_commune_servicepostal = $comp_commune_servicepostal;

        return $this;
    }

    public function getCpCl(): ?string
    {
        return $this->cp_cl;
    }

    public function setCpCl(?string $cp_cl): self
    {
        $this->cp_cl = $cp_cl;

        return $this;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(?string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getAcceBenefiaire(): ?string
    {
        return $this->acce_benefiaire;
    }

    public function setAcceBenefiaire(?string $acce_benefiaire): self
    {
        $this->acce_benefiaire = $acce_benefiaire;

        return $this;
    }

    public function getIndicComplementaire(): ?string
    {
        return $this->indic_complementaire;
    }

    public function setIndicComplementaire(?string $indic_complementaire): self
    {
        $this->indic_complementaire = $indic_complementaire;

        return $this;
    }

    public function getFrais(): ?bool
    {
        return $this->frais;
    }

    public function setFrais(?bool $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getPremierNecessite(): ?bool
    {
        return $this->premier_necessite;
    }

    public function setPremierNecessite(?bool $premier_necessite): self
    {
        $this->premier_necessite = $premier_necessite;

        return $this;
    }

    public function getSec(): ?bool
    {
        return $this->sec;
    }

    public function setSec(?bool $sec): self
    {
        $this->sec = $sec;

        return $this;
    }

    public function getNombreObjet(): ?string
    {
        return $this->nombre_objet;
    }

    public function setNombreObjet(?string $nombre_objet): self
    {
        $this->nombre_objet = $nombre_objet;

        return $this;
    }

    public function getTelCli(): ?int
    {
        return $this->tel_cli;
    }

    public function setTelCli(?int $tel_cli): self
    {
        $this->tel_cli = $tel_cli;

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

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getTypeLivraison(): ?string
    {
        return $this->type_livraison;
    }

    public function setTypeLivraison(?string $type_livraison): self
    {
        $this->type_livraison = $type_livraison;

        return $this;
    }
}

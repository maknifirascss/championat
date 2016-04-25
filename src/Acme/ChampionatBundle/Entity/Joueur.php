<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", indexes={@ORM\Index(name="id_equipe", columns={"id_equipe"})})
 * @ORM\Entity
 */
class Joueur
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_prenom", type="string", length=50, nullable=false)
     */
    private $nomPrenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalite", type="string", length=50, nullable=false)
     */
    private $nationalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\ChampionatBundle\Entity\Equipe
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe", referencedColumnName="id")
     * })
     */
    private $idEquipe;



    /**
     * Set nomPrenom
     *
     * @param string $nomPrenom
     * @return Joueur
     */
    public function setNomPrenom($nomPrenom)
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    /**
     * Get nomPrenom
     *
     * @return string 
     */
    public function getNomPrenom()
    {
        return $this->nomPrenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Joueur
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return Joueur
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEquipe
     *
     * @param \Acme\ChampionatBundle\Entity\Equipe $idEquipe
     * @return Joueur
     */
    public function setIdEquipe(\Acme\ChampionatBundle\Entity\Equipe $idEquipe = null)
    {
        $this->idEquipe = $idEquipe;

        return $this;
    }

    /**
     * Get idEquipe
     *
     * @return \Acme\ChampionatBundle\Entity\Equipe 
     */
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }
     public function __toString() {
        return $this->getNomPrenom();
    }
}

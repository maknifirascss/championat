<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison", indexes={@ORM\Index(name="id_ligue", columns={"id_ligue"})})
 * @ORM\Entity
 */
class Saison
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\ChampionatBundle\Entity\Ligue
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Ligue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ligue", referencedColumnName="id")
     * })
     */
    private $idLigue;



    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Saison
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Saison
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Saison
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
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
     * Set idLigue
     *
     * @param \Acme\ChampionatBundle\Entity\Ligue $idLigue
     * @return Saison
     */
    public function setIdLigue(\Acme\ChampionatBundle\Entity\Ligue $idLigue = null)
    {
        $this->idLigue = $idLigue;

        return $this;
    }

    /**
     * Get idLigue
     *
     * @return \Acme\ChampionatBundle\Entity\Ligue 
     */
    public function getIdLigue()
    {
        return $this->idLigue;
    }
     public function __toString() {
        return $this->getLibelle();
    }
}

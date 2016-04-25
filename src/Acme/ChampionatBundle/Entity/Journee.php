<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journee
 *
 * @ORM\Table(name="journee", indexes={@ORM\Index(name="id_saison", columns={"id_saison"})})
 * @ORM\Entity
 */
class Journee
{
    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\ChampionatBundle\Entity\Saison
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Saison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_saison", referencedColumnName="id")
     * })
     */
    private $idSaison;



    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Journee
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Journee
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
     * @return Journee
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idSaison
     *
     * @param \Acme\ChampionatBundle\Entity\Saison $idSaison
     * @return Journee
     */
    public function setIdSaison(\Acme\ChampionatBundle\Entity\Saison $idSaison = null)
    {
        $this->idSaison = $idSaison;

        return $this;
    }

    /**
     * Get idSaison
     *
     * @return \Acme\ChampionatBundle\Entity\Saison 
     */
    public function getIdSaison()
    {
        return $this->idSaison;
    }
     public function __toString() {
        return $this->getLibelle();
    }
}

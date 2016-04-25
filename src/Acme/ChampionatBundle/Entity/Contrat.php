<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", indexes={@ORM\Index(name="id_joueur", columns={"id_joueur"}), @ORM\Index(name="id_equipe", columns={"id_equipe"})})
 * @ORM\Entity
 */
class Contrat
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
     * @var \Acme\ChampionatBundle\Entity\Joueur
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_joueur", referencedColumnName="id")
     * })
     */
    private $idJoueur;



    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Contrat
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
     * @return Contrat
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
     * Set idEquipe
     *
     * @param \Acme\ChampionatBundle\Entity\Equipe $idEquipe
     * @return Contrat
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

    /**
     * Set idJoueur
     *
     * @param \Acme\ChampionatBundle\Entity\Joueur $idJoueur
     * @return Contrat
     */
    public function setIdJoueur(\Acme\ChampionatBundle\Entity\Joueur $idJoueur = null)
    {
        $this->idJoueur = $idJoueur;

        return $this;
    }

    /**
     * Get idJoueur
     *
     * @return \Acme\ChampionatBundle\Entity\Joueur 
     */
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }
     public function __toString() {
        return $this->getId();
    }
}

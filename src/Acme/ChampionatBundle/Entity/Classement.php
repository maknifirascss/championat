<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classement
 *
 * @ORM\Table(name="classement", indexes={@ORM\Index(name="id_saison", columns={"id_saison"}), @ORM\Index(name="id_equipe", columns={"id_equipe"})})
 * @ORM\Entity
 */
class Classement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_points", type="integer", nullable=false)
     */
    private $nbPoints;

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
     * @var \Acme\ChampionatBundle\Entity\Saison
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Saison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_saison", referencedColumnName="id")
     * })
     */
    private $idSaison;



    /**
     * Set nbPoints
     *
     * @param integer $nbPoints
     * @return Classement
     */
    public function setNbPoints($nbPoints)
    {
        $this->nbPoints = $nbPoints;

        return $this;
    }

    /**
     * Get nbPoints
     *
     * @return integer 
     */
    public function getNbPoints()
    {
        return $this->nbPoints;
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
     * @return Classement
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
     * Set idSaison
     *
     * @param \Acme\ChampionatBundle\Entity\Saison $idSaison
     * @return Classement
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
        return $this->getId();
    }
}

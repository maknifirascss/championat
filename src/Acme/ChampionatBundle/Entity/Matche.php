<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matche
 *
 * @ORM\Table(name="matche", indexes={@ORM\Index(name="id_equipe", columns={"id_equipe"}), @ORM\Index(name="id_equipe2", columns={"id_equipe2"}), @ORM\Index(name="id_journee", columns={"id_journee"})})
 * @ORM\Entity
 */
class Matche
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\ChampionatBundle\Entity\Journee
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Journee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_journee", referencedColumnName="id")
     * })
     */
    private $idJournee;

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
     * @var \Acme\ChampionatBundle\Entity\Equipe
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe2", referencedColumnName="id")
     * })
     */
    private $idEquipe2;



    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Matche
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date ;
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
     * Set idJournee
     *
     * @param \Acme\ChampionatBundle\Entity\Journee $idJournee
     * @return Matche
     */
    public function setIdJournee(\Acme\ChampionatBundle\Entity\Journee $idJournee = null)
    {
        $this->idJournee = $idJournee;

        return $this;
    }

    /**
     * Get idJournee
     *
     * @return \Acme\ChampionatBundle\Entity\Journee 
     */
    public function getIdJournee()
    {
        return $this->idJournee;
    }

    /**
     * Set idEquipe
     *
     * @param \Acme\ChampionatBundle\Entity\Equipe $idEquipe
     * @return Matche
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
     * Set idEquipe2
     *
     * @param \Acme\ChampionatBundle\Entity\Equipe $idEquipe2
     * @return Matche
     */
    public function setIdEquipe2(\Acme\ChampionatBundle\Entity\Equipe $idEquipe2 = null)
    {
        $this->idEquipe2 = $idEquipe2;

        return $this;
    }

    /**
     * Get idEquipe2
     *
     * @return \Acme\ChampionatBundle\Entity\Equipe 
     */
    public function getIdEquipe2()
    {
        return $this->idEquipe2;
    }
     public function __toString() {
        return $this->getId();
    }
}

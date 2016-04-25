<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Butmarque
 *
 * @ORM\Table(name="butmarque", indexes={@ORM\Index(name="id_joueur", columns={"id_joueur"}), @ORM\Index(name="id_match", columns={"id_match"})})
 * @ORM\Entity
 */
class Butmarque
{
    /**
     * @var string
     *
     * @ORM\Column(name="Minute", type="string", length=50, nullable=false)
     */
    private $minute;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Acme\ChampionatBundle\Entity\Matche
     *
     * @ORM\ManyToOne(targetEntity="Acme\ChampionatBundle\Entity\Matche")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_match", referencedColumnName="id")
     * })
     */
    private $idMatch;



    /**
     * Set minute
     *
     * @param string $minute
     * @return Butmarque
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * Get minute
     *
     * @return string 
     */
    public function getMinute()
    {
        return $this->minute;
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
     * Set idJoueur
     *
     * @param \Acme\ChampionatBundle\Entity\Joueur $idJoueur
     * @return Butmarque
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

    /**
     * Set idMatch
     *
     * @param \Acme\ChampionatBundle\Entity\Matche $idMatch
     * @return Butmarque
     */
    public function setIdMatch(\Acme\ChampionatBundle\Entity\Matche $idMatch = null)
    {
        $this->idMatch = $idMatch;

        return $this;
    }

    /**
     * Get idMatch
     *
     * @return \Acme\ChampionatBundle\Entity\Matche 
     */
    public function getIdMatch()
    {
        return $this->idMatch;
    }
    public function __toString() {
        return $this->getId();
    }

}

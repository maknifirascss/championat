<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="id_ligue", columns={"id_ligue"})})
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_equipe", type="string", length=50, nullable=false)
     */
    private $nomEquipe;

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
     * Set nomEquipe
     *
     * @param string $nomEquipe
     * @return Equipe
     */
    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    /**
     * Get nomEquipe
     *
     * @return string 
     */
    public function getNomEquipe()
    {
        return $this->nomEquipe;
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
     * @return Equipe
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
        return $this->getNomEquipe();
    }
}

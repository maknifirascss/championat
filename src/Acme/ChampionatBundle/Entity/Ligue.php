<?php

namespace Acme\ChampionatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligue
 *
 * @ORM\Table(name="ligue")
 * @ORM\Entity
 */
class Ligue
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_ligue", type="string", length=50, nullable=false)
     */
    private $nomLigue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nomLigue
     *
     * @param string $nomLigue
     * @return Ligue
     */
    public function setNomLigue($nomLigue)
    {
        $this->nomLigue = $nomLigue;

        return $this;
    }

    /**
     * Get nomLigue
     *
     * @return string 
     */
    public function getNomLigue()
    {
        return $this->nomLigue;
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
     public function __toString() {
        return $this->getNomLigue();
    }
}

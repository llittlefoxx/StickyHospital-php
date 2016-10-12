<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maladie
 *
 * @ORM\Table(name="maladie")
 * @ORM\Entity
 */
class Maladie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_maladie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_maladie", type="string", length=254, nullable=true)
     */
    private $nomMaladie;



    /**
     * Get idMaladie
     *
     * @return integer 
     */
    public function getIdMaladie()
    {
        return $this->idMaladie;
    }

    /**
     * Set nomMaladie
     *
     * @param string $nomMaladie
     * @return Maladie
     */
    public function setNomMaladie($nomMaladie)
    {
        $this->nomMaladie = $nomMaladie;
    
        return $this;
    }

    /**
     * Get nomMaladie
     *
     * @return string 
     */
    public function getNomMaladie()
    {
        return $this->nomMaladie;
    }
}
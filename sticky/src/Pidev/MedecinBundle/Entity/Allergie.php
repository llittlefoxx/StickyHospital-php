<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allergie
 *
 * @ORM\Table(name="allergie")
 * @ORM\Entity
 */
class Allergie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_allergie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAllergie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_allergie", type="string", length=254, nullable=true)
     */
    private $nomAllergie;



    /**
     * Get idAllergie
     *
     * @return integer 
     */
    public function getIdAllergie()
    {
        return $this->idAllergie;
    }

    /**
     * Set nomAllergie
     *
     * @param string $nomAllergie
     * @return Allergie
     */
    public function setNomAllergie($nomAllergie)
    {
        $this->nomAllergie = $nomAllergie;
    
        return $this;
    }

    /**
     * Get nomAllergie
     *
     * @return string 
     */
    public function getNomAllergie()
    {
        return $this->nomAllergie;
    }
}
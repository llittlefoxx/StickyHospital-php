<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament")
 * @ORM\Entity
 */
class Medicament
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_medicament", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMedicament;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_medic", type="string", length=254, nullable=true)
     */
    private $libMedic;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte_valable", type="integer", nullable=true)
     */
    private $qteValable;

    /**
     * @var string
     *
     * @ORM\Column(name="effect_ind", type="string", length=254, nullable=true)
     */
    private $effectInd;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant_min", type="integer", nullable=false)
     */
    private $quantMin;



    /**
     * Get idMedicament
     *
     * @return integer 
     */
    public function getIdMedicament()
    {
        return $this->idMedicament;
    }

    /**
     * Set libMedic
     *
     * @param string $libMedic
     * @return Medicament
     */
    public function setLibMedic($libMedic)
    {
        $this->libMedic = $libMedic;
    
        return $this;
    }

    /**
     * Get libMedic
     *
     * @return string 
     */
    public function getLibMedic()
    {
        return $this->libMedic;
    }

    /**
     * Set qteValable
     *
     * @param integer $qteValable
     * @return Medicament
     */
    public function setQteValable($qteValable)
    {
        $this->qteValable = $qteValable;
    
        return $this;
    }

    /**
     * Get qteValable
     *
     * @return integer 
     */
    public function getQteValable()
    {
        return $this->qteValable;
    }

    /**
     * Set effectInd
     *
     * @param string $effectInd
     * @return Medicament
     */
    public function setEffectInd($effectInd)
    {
        $this->effectInd = $effectInd;
    
        return $this;
    }

    /**
     * Get effectInd
     *
     * @return string 
     */
    public function getEffectInd()
    {
        return $this->effectInd;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Medicament
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantMin
     *
     * @param integer $quantMin
     * @return Medicament
     */
    public function setQuantMin($quantMin)
    {
        $this->quantMin = $quantMin;
    
        return $this;
    }

    /**
     * Get quantMin
     *
     * @return integer 
     */
    public function getQuantMin()
    {
        return $this->quantMin;
    }
}
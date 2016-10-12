<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervention
 *
 * @ORM\Table(name="intervention")
 * @ORM\Entity
 */
class Intervention
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_intervention", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIntervention;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_intervention", type="string", length=254, nullable=true)
     */
    private $libIntervention;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_interv", type="float", nullable=true)
     */
    private $prixInterv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_interv", type="datetime", nullable=true)
     */
    private $dateInterv;



    /**
     * Get idIntervention
     *
     * @return integer 
     */
    public function getIdIntervention()
    {
        return $this->idIntervention;
    }

    /**
     * Set libIntervention
     *
     * @param string $libIntervention
     * @return Intervention
     */
    public function setLibIntervention($libIntervention)
    {
        $this->libIntervention = $libIntervention;
    
        return $this;
    }

    /**
     * Get libIntervention
     *
     * @return string 
     */
    public function getLibIntervention()
    {
        return $this->libIntervention;
    }

    /**
     * Set prixInterv
     *
     * @param float $prixInterv
     * @return Intervention
     */
    public function setPrixInterv($prixInterv)
    {
        $this->prixInterv = $prixInterv;
    
        return $this;
    }

    /**
     * Get prixInterv
     *
     * @return float 
     */
    public function getPrixInterv()
    {
        return $this->prixInterv;
    }

    /**
     * Set dateInterv
     *
     * @param \DateTime $dateInterv
     * @return Intervention
     */
    public function setDateInterv($dateInterv)
    {
        $this->dateInterv = $dateInterv;
    
        return $this;
    }

    /**
     * Get dateInterv
     *
     * @return \DateTime 
     */
    public function getDateInterv()
    {
        return $this->dateInterv;
    }
}
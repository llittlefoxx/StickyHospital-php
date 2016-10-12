<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traitement
 *
 * @ORM\Table(name="traitement")
 * @ORM\Entity
 */
class Traitement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_traitement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTraitement;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_traitement", type="string", length=254, nullable=true)
     */
    private $libTraitement;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_traitement", type="float", nullable=true)
     */
    private $prixTraitement;

    /**
     * @var \Intervention
     *
     * @ORM\ManyToOne(targetEntity="Intervention")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intervention", referencedColumnName="id_intervention")
     * })
     */
    private $idIntervention;



    /**
     * Get idTraitement
     *
     * @return integer 
     */
    public function getIdTraitement()
    {
        return $this->idTraitement;
    }

    /**
     * Set libTraitement
     *
     * @param string $libTraitement
     * @return Traitement
     */
    public function setLibTraitement($libTraitement)
    {
        $this->libTraitement = $libTraitement;
    
        return $this;
    }

    /**
     * Get libTraitement
     *
     * @return string 
     */
    public function getLibTraitement()
    {
        return $this->libTraitement;
    }

    /**
     * Set prixTraitement
     *
     * @param float $prixTraitement
     * @return Traitement
     */
    public function setPrixTraitement($prixTraitement)
    {
        $this->prixTraitement = $prixTraitement;
    
        return $this;
    }

    /**
     * Get prixTraitement
     *
     * @return float 
     */
    public function getPrixTraitement()
    {
        return $this->prixTraitement;
    }

    /**
     * Set idIntervention
     *
     * @param \Pidev\MedecinBundle\Entity\Intervention $idIntervention
     * @return Traitement
     */
    public function setIdIntervention(\Pidev\MedecinBundle\Entity\Intervention $idIntervention = null)
    {
        $this->idIntervention = $idIntervention;
    
        return $this;
    }

    /**
     * Get idIntervention
     *
     * @return \Pidev\MedecinBundle\Entity\Intervention 
     */
    public function getIdIntervention()
    {
        return $this->idIntervention;
    }
}
<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observation
 *
 * @ORM\Table(name="observation")
 * @ORM\Entity
 */
class Observation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_observation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObservation;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=254, nullable=true)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_observation", type="datetime", nullable=true)
     */
    private $dateObservation;

    /**
     * @var \DossierMedical
     *
     * @ORM\ManyToOne(targetEntity="DossierMedical")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dossiermedical", referencedColumnName="id_dossiermedical")
     * })
     */
    private $idDossiermedical;



    /**
     * Get idObservation
     *
     * @return integer 
     */
    public function getIdObservation()
    {
        return $this->idObservation;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Observation
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    
        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set dateObservation
     *
     * @param \DateTime $dateObservation
     * @return Observation
     */
    public function setDateObservation($dateObservation)
    {
        $this->dateObservation = $dateObservation;
    
        return $this;
    }

    /**
     * Get dateObservation
     *
     * @return \DateTime 
     */
    public function getDateObservation()
    {
        return $this->dateObservation;
    }

    /**
     * Set idDossiermedical
     *
     * @param \Pidev\MedecinBundle\Entity\DossierMedical $idDossiermedical
     * @return Observation
     */
    public function setIdDossiermedical(\Pidev\MedecinBundle\Entity\DossierMedical $idDossiermedical = null)
    {
        $this->idDossiermedical = $idDossiermedical;
    
        return $this;
    }

    /**
     * Get idDossiermedical
     *
     * @return \Pidev\MedecinBundle\Entity\DossierMedical 
     */
    public function getIdDossiermedical()
    {
        return $this->idDossiermedical;
    }
}
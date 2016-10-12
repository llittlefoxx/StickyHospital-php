<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierMedical
 *
 * @ORM\Table(name="dossier_medical")
 * @ORM\Entity
 */
class DossierMedical
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dossiermedical", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDossiermedical;

    /**
     * @var \Maladie
     *
     * @ORM\ManyToOne(targetEntity="Maladie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_maladie", referencedColumnName="id_maladie")
     * })
     */
    private $idMaladie;

    /**
     * @var \Allergie
     *
     * @ORM\ManyToOne(targetEntity="Allergie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_allergie", referencedColumnName="id_allergie")
     * })
     */
    private $idAllergie;

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
     * @var \Dossier
     *
     * @ORM\ManyToOne(targetEntity="Dossier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dossierPatient", referencedColumnName="id_dossierPatient")
     * })
     */
    private $idDossierpatient;



    /**
     * Get idDossiermedical
     *
     * @return integer 
     */
    public function getIdDossiermedical()
    {
        return $this->idDossiermedical;
    }

    /**
     * Set idMaladie
     *
     * @param \Pidev\MedecinBundle\Entity\Maladie $idMaladie
     * @return DossierMedical
     */
    public function setIdMaladie(\Pidev\MedecinBundle\Entity\Maladie $idMaladie = null)
    {
        $this->idMaladie = $idMaladie;
    
        return $this;
    }

    /**
     * Get idMaladie
     *
     * @return \Pidev\MedecinBundle\Entity\Maladie 
     */
    public function getIdMaladie()
    {
        return $this->idMaladie;
    }

    /**
     * Set idAllergie
     *
     * @param \Pidev\MedecinBundle\Entity\Allergie $idAllergie
     * @return DossierMedical
     */
    public function setIdAllergie(\Pidev\MedecinBundle\Entity\Allergie $idAllergie = null)
    {
        $this->idAllergie = $idAllergie;
    
        return $this;
    }

    /**
     * Get idAllergie
     *
     * @return \Pidev\MedecinBundle\Entity\Allergie 
     */
    public function getIdAllergie()
    {
        return $this->idAllergie;
    }

    /**
     * Set idIntervention
     *
     * @param \Pidev\MedecinBundle\Entity\Intervention $idIntervention
     * @return DossierMedical
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

    /**
     * Set idDossierpatient
     *
     * @param \Pidev\MedecinBundle\Entity\Dossier $idDossierpatient
     * @return DossierMedical
     */
    public function setIdDossierpatient(\Pidev\MedecinBundle\Entity\Dossier $idDossierpatient = null)
    {
        $this->idDossierpatient = $idDossierpatient;
    
        return $this;
    }

    /**
     * Get idDossierpatient
     *
     * @return \Pidev\MedecinBundle\Entity\Dossier 
     */
    public function getIdDossierpatient()
    {
        return $this->idDossierpatient;
    }
}
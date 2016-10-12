<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation")
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsultation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_consultation", type="datetime", nullable=true)
     */
    private $dateConsultation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_consultation", type="string", length=254, nullable=true)
     */
    private $typeConsultation;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_patient", referencedColumnName="id_patient")
     * })
     */
    private $idPatient;

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
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medecin", referencedColumnName="id_medecin")
     * })
     */
    private $idMedecin;



    /**
     * Get idConsultation
     *
     * @return integer 
     */
    public function getIdConsultation()
    {
        return $this->idConsultation;
    }

    /**
     * Set dateConsultation
     *
     * @param \DateTime $dateConsultation
     * @return Consultation
     */
    public function setDateConsultation($dateConsultation)
    {
        $this->dateConsultation = $dateConsultation;
    
        return $this;
    }

    /**
     * Get dateConsultation
     *
     * @return \DateTime 
     */
    public function getDateConsultation()
    {
        return $this->dateConsultation;
    }

    /**
     * Set typeConsultation
     *
     * @param string $typeConsultation
     * @return Consultation
     */
    public function setTypeConsultation($typeConsultation)
    {
        $this->typeConsultation = $typeConsultation;
    
        return $this;
    }

    /**
     * Get typeConsultation
     *
     * @return string 
     */
    public function getTypeConsultation()
    {
        return $this->typeConsultation;
    }

    /**
     * Set idPatient
     *
     * @param \Pidev\MedecinBundle\Entity\Patient $idPatient
     * @return Consultation
     */
    public function setIdPatient(\Pidev\MedecinBundle\Entity\Patient $idPatient = null)
    {
        $this->idPatient = $idPatient;
    
        return $this;
    }

    /**
     * Get idPatient
     *
     * @return \Pidev\MedecinBundle\Entity\Patient 
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * Set idDossiermedical
     *
     * @param \Pidev\MedecinBundle\Entity\DossierMedical $idDossiermedical
     * @return Consultation
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

    /**
     * Set idMedecin
     *
     * @param \Pidev\MedecinBundle\Entity\Medecin $idMedecin
     * @return Consultation
     */
    public function setIdMedecin(\Pidev\MedecinBundle\Entity\Medecin $idMedecin = null)
    {
        $this->idMedecin = $idMedecin;
    
        return $this;
    }

    /**
     * Get idMedecin
     *
     * @return \Pidev\MedecinBundle\Entity\Medecin 
     */
    public function getIdMedecin()
    {
        return $this->idMedecin;
    }
}
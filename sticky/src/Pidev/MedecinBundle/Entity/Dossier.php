<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dossier
 *
 * @ORM\Table(name="dossier")
 * @ORM\Entity
 */
class Dossier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dossierPatient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDossierpatient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation_dossier", type="datetime", nullable=false)
     */
    private $dateCreationDossier;

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
     * Get idDossierpatient
     *
     * @return integer 
     */
    public function getIdDossierpatient()
    {
        return $this->idDossierpatient;
    }

    /**
     * Set dateCreationDossier
     *
     * @param \DateTime $dateCreationDossier
     * @return Dossier
     */
    public function setDateCreationDossier($dateCreationDossier)
    {
        $this->dateCreationDossier = $dateCreationDossier;
    
        return $this;
    }

    /**
     * Get dateCreationDossier
     *
     * @return \DateTime 
     */
    public function getDateCreationDossier()
    {
        return $this->dateCreationDossier;
    }

    /**
     * Set idPatient
     *
     * @param \Pidev\MedecinBundle\Entity\Patient $idPatient
     * @return Dossier
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
}
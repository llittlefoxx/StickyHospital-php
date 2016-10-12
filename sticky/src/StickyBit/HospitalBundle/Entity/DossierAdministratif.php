<?php

namespace StickyBit\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierAdministratif
 *
 * @ORM\Table(name="dossier_administratif")
 * @ORM\Entity
 */
class DossierAdministratif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dadmin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDadmin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return DossierAdministratif
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Get idDadmin
     *
     * @return integer 
     */
    public function getIdDadmin()
    {
        return $this->idDadmin;
    }

    /**
     * Set idDossierpatient
     *
     * @param \StickyBit\HospitalBundle\Entity\Dossier $idDossierpatient
     * @return DossierAdministratif
     */
    public function setIdDossierpatient(\StickyBit\HospitalBundle\Entity\Dossier $idDossierpatient = null)
    {
        $this->idDossierpatient = $idDossierpatient;
    
        return $this;
    }

    /**
     * Get idDossierpatient
     *
     * @return \StickyBit\HospitalBundle\Entity\Dossier 
     */
    public function getIdDossierpatient()
    {
        return $this->idDossierpatient;
    }
}
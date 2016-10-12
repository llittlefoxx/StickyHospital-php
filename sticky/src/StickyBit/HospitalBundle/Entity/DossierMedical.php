<?php

namespace StickyBit\HospitalBundle\Entity;

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
     * Set idDossierpatient
     *
     * @param \StickyBit\HospitalBundle\Entity\Dossier $idDossierpatient
     * @return DossierMedical
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
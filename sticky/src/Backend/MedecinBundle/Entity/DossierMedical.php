<?php

namespace Backend\MedecinBundle\Entity;

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
     * @ORM\JoinColumn(name="id_dossierPatient", referencedColumnName="id_dossierPatient")
     * })
     */
    private $idDossierpatient;
    public function getIdDossiermedical() {
        return $this->idDossiermedical;
    }

    public function getIdDossierpatient() {
        return $this->idDossierpatient;
    }




    /**
     * Set idDossierpatient
     *
     * @param \Backend\MedecinBundle\Entity\Dossier $idDossierpatient
     * @return DossierMedical
     */
    public function setIdDossierpatient(\Backend\MedecinBundle\Entity\Dossier $idDossierpatient = null)
    {
        $this->idDossierpatient = $idDossierpatient;
    
        return $this;
    }
}
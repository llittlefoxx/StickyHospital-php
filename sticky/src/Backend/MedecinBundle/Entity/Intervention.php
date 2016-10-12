<?php

namespace Backend\MedecinBundle\Entity;

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
     * @var \DossierMedical
     *
     * @ORM\ManyToOne(targetEntity="DossierMedical")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dossiermedical", referencedColumnName="id_dossiermedical")
     * })
     */
    private $idDossiermedical;

    public function getIdIntervention() {
        return $this->idIntervention;
    }

    public function getLibIntervention() {
        return $this->libIntervention;
    }

    public function getPrixInterv() {
        return $this->prixInterv;
    }

    public function getDateInterv() {
        return $this->dateInterv;
    }

    public function getIdDossiermedical() {
        return $this->idDossiermedical;
    }
    public function setIdIntervention($idIntervention) {
        $this->idIntervention = $idIntervention;
        return $this;
    }

    public function setLibIntervention($libIntervention) {
        $this->libIntervention = $libIntervention;
        return $this;
    }

    public function setPrixInterv($prixInterv) {
        $this->prixInterv = $prixInterv;
        return $this;
    }

    public function setDateInterv(\DateTime $dateInterv) {
        $this->dateInterv = $dateInterv;
        return $this;
    }
    /**
     * Get idDossiermedical
     *
     * @return \Backend\HospitalBundle\Entity\DossierMedical
     */
    public function setIdDossiermedical($idDossiermedical) {
        $this->idDossiermedical = $idDossiermedical;
        return $this;
    }



}
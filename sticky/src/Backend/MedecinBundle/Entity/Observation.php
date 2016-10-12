<?php

namespace Backend\MedecinBundle\Entity;

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

    public function getIdObservation() {
        return $this->idObservation;
    }

    public function getTexte() {
        return $this->texte;
    }

    public function getDateObservation() {
        return $this->dateObservation;
    }

    public function getIdDossiermedical() {
        return $this->idDossiermedical;
    }
    public function setIdObservation($idObservation) {
        $this->idObservation = $idObservation;
        return $this;
    }

    public function setTexte($texte) {
        $this->texte = $texte;
        return $this;
    }
    
    public function setDateObservation(\DateTime $dateObservation) {
        $this->dateObservation = $dateObservation;
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
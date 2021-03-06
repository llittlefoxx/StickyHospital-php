<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maladie
 *
 * @ORM\Table(name="maladie")
 * @ORM\Entity
 */
class Maladie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_maladie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_maladie", type="string", length=254, nullable=true)
     */
    private $nomMaladie;

    /**
     * @var \DossierMedical
     *
     * @ORM\ManyToOne(targetEntity="DossierMedical")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dossiermedical", referencedColumnName="id_dossiermedical")
     * })
     */
    private $idDossiermedical;

    public function getIdMaladie() {
        return $this->idMaladie;
    }

    public function getNomMaladie() {
        return $this->nomMaladie;
    }

    public function getIdDossiermedical() {
        return $this->idDossiermedical;
    }

    public function setIdMaladie($idMaladie) {
        $this->idMaladie = $idMaladie;
        return $this;
    }

    public function setNomMaladie($nomMaladie) {
        $this->nomMaladie = $nomMaladie;
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
<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allergie
 *
 * @ORM\Table(name="allergie")
 * @ORM\Entity
 */
class Allergie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_allergie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAllergie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_allergie", type="string", length=254, nullable=true)
     */
    private $nomAllergie;

    /**
     * @var \DossierMedical
     *
     * @ORM\ManyToOne(targetEntity="DossierMedical")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dossiermedical", referencedColumnName="id_dossiermedical")
     * })
     */
    private $idDossiermedical;

    public function getIdAllergie() {
        return $this->idAllergie;
    }

    public function getNomAllergie() {
        return $this->nomAllergie;
    }

    public function getIdDossiermedical() {
        return $this->idDossiermedical;
    }

    public function setIdAllergie($idAllergie) {
        $this->idAllergie = $idAllergie;
        return $this;
    }

    public function setNomAllergie($nomAllergie) {
        $this->nomAllergie = $nomAllergie;
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
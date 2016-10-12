<?php

namespace StickyBit\HospitalBundle\Entity;

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



    /**
     * Set nomAllergie
     *
     * @param string $nomAllergie
     * @return Allergie
     */
    public function setNomAllergie($nomAllergie)
    {
        $this->nomAllergie = $nomAllergie;
    
        return $this;
    }

    /**
     * Get nomAllergie
     *
     * @return string 
     */
    public function getNomAllergie()
    {
        return $this->nomAllergie;
    }

    /**
     * Get idAllergie
     *
     * @return integer 
     */
    public function getIdAllergie()
    {
        return $this->idAllergie;
    }

    /**
     * Set idDossiermedical
     *
     * @param \StickyBit\HospitalBundle\Entity\DossierMedical $idDossiermedical
     * @return Allergie
     */
    public function setIdDossiermedical(\StickyBit\HospitalBundle\Entity\DossierMedical $idDossiermedical = null)
    {
        $this->idDossiermedical = $idDossiermedical;
    
        return $this;
    }

    /**
     * Get idDossiermedical
     *
     * @return \StickyBit\HospitalBundle\Entity\DossierMedical 
     */
    public function getIdDossiermedical()
    {
        return $this->idDossiermedical;
    }
}
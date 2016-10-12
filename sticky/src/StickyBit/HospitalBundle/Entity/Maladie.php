<?php

namespace StickyBit\HospitalBundle\Entity;

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



    /**
     * Set nomMaladie
     *
     * @param string $nomMaladie
     * @return Maladie
     */
    public function setNomMaladie($nomMaladie)
    {
        $this->nomMaladie = $nomMaladie;
    
        return $this;
    }

    /**
     * Get nomMaladie
     *
     * @return string 
     */
    public function getNomMaladie()
    {
        return $this->nomMaladie;
    }

    /**
     * Get idMaladie
     *
     * @return integer 
     */
    public function getIdMaladie()
    {
        return $this->idMaladie;
    }

    /**
     * Set idDossiermedical
     *
     * @param \StickyBit\HospitalBundle\Entity\DossierMedical $idDossiermedical
     * @return Maladie
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
<?php

namespace StickyBit\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonnance
 *
 * @ORM\Table(name="ordonnance")
 * @ORM\Entity
 */
class Ordonnance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordonnance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdonnance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ordonnance", type="datetime", nullable=true)
     */
    private $dateOrdonnance;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var \Medicament
     *
     * @ORM\ManyToOne(targetEntity="Medicament")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medicament", referencedColumnName="id_medicament")
     * })
     */
    private $idMedicament;

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
     * Set dateOrdonnance
     *
     * @param \DateTime $dateOrdonnance
     * @return Ordonnance
     */
    public function setDateOrdonnance($dateOrdonnance)
    {
        $this->dateOrdonnance = $dateOrdonnance;
    
        return $this;
    }

    /**
     * Get dateOrdonnance
     *
     * @return \DateTime 
     */
    public function getDateOrdonnance()
    {
        return $this->dateOrdonnance;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ordonnance
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idOrdonnance
     *
     * @return integer 
     */
    public function getIdOrdonnance()
    {
        return $this->idOrdonnance;
    }

    /**
     * Set idDossiermedical
     *
     * @param \StickyBit\HospitalBundle\Entity\DossierMedical $idDossiermedical
     * @return Ordonnance
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

    /**
     * Set idMedicament
     *
     * @param \StickyBit\HospitalBundle\Entity\Medicament $idMedicament
     * @return Ordonnance
     */
    public function setIdMedicament(\StickyBit\HospitalBundle\Entity\Medicament $idMedicament = null)
    {
        $this->idMedicament = $idMedicament;
    
        return $this;
    }

    /**
     * Get idMedicament
     *
     * @return \StickyBit\HospitalBundle\Entity\Medicament 
     */
    public function getIdMedicament()
    {
        return $this->idMedicament;
    }
}
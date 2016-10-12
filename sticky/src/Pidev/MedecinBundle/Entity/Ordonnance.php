<?php

namespace Pidev\MedecinBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="id_ligne", type="integer", nullable=false)
     */
    private $idLigne;

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
     * Get idOrdonnance
     *
     * @return integer 
     */
    public function getIdOrdonnance()
    {
        return $this->idOrdonnance;
    }

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
     * Set idLigne
     *
     * @param integer $idLigne
     * @return Ordonnance
     */
    public function setIdLigne($idLigne)
    {
        $this->idLigne = $idLigne;
    
        return $this;
    }

    /**
     * Get idLigne
     *
     * @return integer 
     */
    public function getIdLigne()
    {
        return $this->idLigne;
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
     * Set idMedicament
     *
     * @param \Pidev\MedecinBundle\Entity\Medicament $idMedicament
     * @return Ordonnance
     */
    public function setIdMedicament(\Pidev\MedecinBundle\Entity\Medicament $idMedicament = null)
    {
        $this->idMedicament = $idMedicament;
    
        return $this;
    }

    /**
     * Get idMedicament
     *
     * @return \Pidev\MedecinBundle\Entity\Medicament 
     */
    public function getIdMedicament()
    {
        return $this->idMedicament;
    }

    /**
     * Set idDossiermedical
     *
     * @param \Pidev\MedecinBundle\Entity\DossierMedical $idDossiermedical
     * @return Ordonnance
     */
    public function setIdDossiermedical(\Pidev\MedecinBundle\Entity\DossierMedical $idDossiermedical = null)
    {
        $this->idDossiermedical = $idDossiermedical;
    
        return $this;
    }

    /**
     * Get idDossiermedical
     *
     * @return \Pidev\MedecinBundle\Entity\DossierMedical 
     */
    public function getIdDossiermedical()
    {
        return $this->idDossiermedical;
    }
}
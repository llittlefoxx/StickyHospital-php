<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_facturation", type="datetime", nullable=true)
     */
    private $dateFacturation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="total_facture", type="float", nullable=true)
     */
    private $totalFacture;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_patient", referencedColumnName="id_patient")
     * })
     */
    private $idPatient;

    /**
     * @var \DossierAdministratif
     *
     * @ORM\ManyToOne(targetEntity="DossierAdministratif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dadmin", referencedColumnName="id_dadmin")
     * })
     */
    private $idDadmin;



    /**
     * Get idFacture
     *
     * @return integer 
     */
    public function getIdFacture()
    {
        return $this->idFacture;
    }

    /**
     * Set dateFacturation
     *
     * @param \DateTime $dateFacturation
     * @return Facture
     */
    public function setDateFacturation($dateFacturation)
    {
        $this->dateFacturation = $dateFacturation;
    
        return $this;
    }

    /**
     * Get dateFacturation
     *
     * @return \DateTime 
     */
    public function getDateFacturation()
    {
        return $this->dateFacturation;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Facture
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set totalFacture
     *
     * @param float $totalFacture
     * @return Facture
     */
    public function setTotalFacture($totalFacture)
    {
        $this->totalFacture = $totalFacture;
    
        return $this;
    }

    /**
     * Get totalFacture
     *
     * @return float 
     */
    public function getTotalFacture()
    {
        return $this->totalFacture;
    }

    /**
     * Set idPatient
     *
     * @param \Pidev\MedecinBundle\Entity\Patient $idPatient
     * @return Facture
     */
    public function setIdPatient(\Pidev\MedecinBundle\Entity\Patient $idPatient = null)
    {
        $this->idPatient = $idPatient;
    
        return $this;
    }

    /**
     * Get idPatient
     *
     * @return \Pidev\MedecinBundle\Entity\Patient 
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * Set idDadmin
     *
     * @param \Pidev\MedecinBundle\Entity\DossierAdministratif $idDadmin
     * @return Facture
     */
    public function setIdDadmin(\Pidev\MedecinBundle\Entity\DossierAdministratif $idDadmin = null)
    {
        $this->idDadmin = $idDadmin;
    
        return $this;
    }

    /**
     * Get idDadmin
     *
     * @return \Pidev\MedecinBundle\Entity\DossierAdministratif 
     */
    public function getIdDadmin()
    {
        return $this->idDadmin;
    }
}
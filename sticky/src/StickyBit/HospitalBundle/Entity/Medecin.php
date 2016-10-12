<?php

namespace StickyBit\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecin
 *
 * @ORM\Table(name="medecin")
 * @ORM\Entity
 */
class Medecin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_medecin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_medecin", type="string", length=254, nullable=true)
     */
    private $nomMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_medecin", type="string", length=254, nullable=true)
     */
    private $prenomMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_medecin", type="string", length=254, nullable=true)
     */
    private $adresseMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_medecin", type="string", length=254, nullable=true)
     */
    private $mailMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_medecin", type="string", length=254, nullable=true)
     */
    private $telMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite_medecin", type="string", length=254, nullable=true)
     */
    private $specialiteMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_medecin", type="string", length=254, nullable=true)
     */
    private $cinMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="urlPhoto", type="blob", nullable=true)
     */
    private $urlphoto;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_service", referencedColumnName="id_serv")
     * })
     */
    private $idService;



    /**
     * Set nomMedecin
     *
     * @param string $nomMedecin
     * @return Medecin
     */
    public function setNomMedecin($nomMedecin)
    {
        $this->nomMedecin = $nomMedecin;
    
        return $this;
    }

    /**
     * Get nomMedecin
     *
     * @return string 
     */
    public function getNomMedecin()
    {
        return $this->nomMedecin;
    }

    /**
     * Set prenomMedecin
     *
     * @param string $prenomMedecin
     * @return Medecin
     */
    public function setPrenomMedecin($prenomMedecin)
    {
        $this->prenomMedecin = $prenomMedecin;
    
        return $this;
    }

    /**
     * Get prenomMedecin
     *
     * @return string 
     */
    public function getPrenomMedecin()
    {
        return $this->prenomMedecin;
    }

    /**
     * Set adresseMedecin
     *
     * @param string $adresseMedecin
     * @return Medecin
     */
    public function setAdresseMedecin($adresseMedecin)
    {
        $this->adresseMedecin = $adresseMedecin;
    
        return $this;
    }

    /**
     * Get adresseMedecin
     *
     * @return string 
     */
    public function getAdresseMedecin()
    {
        return $this->adresseMedecin;
    }

    /**
     * Set mailMedecin
     *
     * @param string $mailMedecin
     * @return Medecin
     */
    public function setMailMedecin($mailMedecin)
    {
        $this->mailMedecin = $mailMedecin;
    
        return $this;
    }

    /**
     * Get mailMedecin
     *
     * @return string 
     */
    public function getMailMedecin()
    {
        return $this->mailMedecin;
    }

    /**
     * Set telMedecin
     *
     * @param string $telMedecin
     * @return Medecin
     */
    public function setTelMedecin($telMedecin)
    {
        $this->telMedecin = $telMedecin;
    
        return $this;
    }

    /**
     * Get telMedecin
     *
     * @return string 
     */
    public function getTelMedecin()
    {
        return $this->telMedecin;
    }

    /**
     * Set specialiteMedecin
     *
     * @param string $specialiteMedecin
     * @return Medecin
     */
    public function setSpecialiteMedecin($specialiteMedecin)
    {
        $this->specialiteMedecin = $specialiteMedecin;
    
        return $this;
    }

    /**
     * Get specialiteMedecin
     *
     * @return string 
     */
    public function getSpecialiteMedecin()
    {
        return $this->specialiteMedecin;
    }

    /**
     * Set cinMedecin
     *
     * @param string $cinMedecin
     * @return Medecin
     */
    public function setCinMedecin($cinMedecin)
    {
        $this->cinMedecin = $cinMedecin;
    
        return $this;
    }

    /**
     * Get cinMedecin
     *
     * @return string 
     */
    public function getCinMedecin()
    {
        return $this->cinMedecin;
    }

    /**
     * Get idMedecin
     *
     * @return integer 
     */
    public function getIdMedecin()
    {
        return $this->idMedecin;
    }

    /**
     * Set idService
     *
     * @param \StickyBit\HospitalBundle\Entity\Service $idService
     * @return Medecin
     */
    public function setIdService(\StickyBit\HospitalBundle\Entity\Service $idService = null)
    {
        $this->idService = $idService;
    
        return $this;
    }

    /**
     * Get idService
     *
     * @return \StickyBit\HospitalBundle\Entity\Service 
     */
    public function getIdService()
    {
        return $this->idService;
    }
}
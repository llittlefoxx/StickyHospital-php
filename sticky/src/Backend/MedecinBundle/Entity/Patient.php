<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity
 */
class Patient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_patient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_patient", type="string", length=254, nullable=false)
     */
    private $nomPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_patient", type="string", length=254, nullable=false)
     */
    private $prenomPatient;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin_patient", type="integer", nullable=false)
     */
    private $cinPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=254, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_patient", type="string", length=254, nullable=true)
     */
    private $telPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_patient", type="string", length=254, nullable=true)
     */
    private $mailPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="url_photo_patient", type="blob", nullable=true)
     */
    private $urlPhotoPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="sex_patient", type="string", length=254, nullable=true)
     */
    private $sexPatient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_n_patient", type="datetime", nullable=true)
     */
    private $dateNPatient;

    public function getIdPatient() {
        return $this->idPatient;
    }

    public function getNomPatient() {
        return $this->nomPatient;
    }

    public function getPrenomPatient() {
        return $this->prenomPatient;
    }

    public function getCinPatient() {
        return $this->cinPatient;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getTelPatient() {
        return $this->telPatient;
    }

    public function getMailPatient() {
        return $this->mailPatient;
    }

    public function getUrlPhotoPatient() {
        return $this->urlPhotoPatient;
    }

    public function getSexPatient() {
        return $this->sexPatient;
    }

    public function getDateNPatient() {
        return $this->dateNPatient;
    }



    /**
     * Set nomPatient
     *
     * @param string $nomPatient
     * @return Patient
     */
    public function setNomPatient($nomPatient)
    {
        $this->nomPatient = $nomPatient;
    
        return $this;
    }

    /**
     * Set prenomPatient
     *
     * @param string $prenomPatient
     * @return Patient
     */
    public function setPrenomPatient($prenomPatient)
    {
        $this->prenomPatient = $prenomPatient;
    
        return $this;
    }

    /**
     * Set cinPatient
     *
     * @param integer $cinPatient
     * @return Patient
     */
    public function setCinPatient($cinPatient)
    {
        $this->cinPatient = $cinPatient;
    
        return $this;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Patient
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Set telPatient
     *
     * @param string $telPatient
     * @return Patient
     */
    public function setTelPatient($telPatient)
    {
        $this->telPatient = $telPatient;
    
        return $this;
    }

    /**
     * Set mailPatient
     *
     * @param string $mailPatient
     * @return Patient
     */
    public function setMailPatient($mailPatient)
    {
        $this->mailPatient = $mailPatient;
    
        return $this;
    }

    /**
     * Set urlPhotoPatient
     *
     * @param string $urlPhotoPatient
     * @return Patient
     */
    public function setUrlPhotoPatient($urlPhotoPatient)
    {
        $this->urlPhotoPatient = $urlPhotoPatient;
    
        return $this;
    }

    /**
     * Set sexPatient
     *
     * @param string $sexPatient
     * @return Patient
     */
    public function setSexPatient($sexPatient)
    {
        $this->sexPatient = $sexPatient;
    
        return $this;
    }

    /**
     * Set dateNPatient
     *
     * @param \DateTime $dateNPatient
     * @return Patient
     */
    public function setDateNPatient($dateNPatient)
    {
        $this->dateNPatient = $dateNPatient;
    
        return $this;
    }
}
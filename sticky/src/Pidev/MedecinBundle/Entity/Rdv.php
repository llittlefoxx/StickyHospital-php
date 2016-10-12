<?php

namespace Pidev\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity
 */
class Rdv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rdv", type="datetime", nullable=true)
     */
    private $dateRdv;

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
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medecin", referencedColumnName="id_medecin")
     * })
     */
    private $idMedecin;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_serv", referencedColumnName="id_serv")
     * })
     */
    private $idServ;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateRdv
     *
     * @param \DateTime $dateRdv
     * @return Rdv
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;
    
        return $this;
    }

    /**
     * Get dateRdv
     *
     * @return \DateTime 
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set idPatient
     *
     * @param \Pidev\MedecinBundle\Entity\Patient $idPatient
     * @return Rdv
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
     * Set idMedecin
     *
     * @param \Pidev\MedecinBundle\Entity\Medecin $idMedecin
     * @return Rdv
     */
    public function setIdMedecin(\Pidev\MedecinBundle\Entity\Medecin $idMedecin = null)
    {
        $this->idMedecin = $idMedecin;
    
        return $this;
    }

    /**
     * Get idMedecin
     *
     * @return \Pidev\MedecinBundle\Entity\Medecin 
     */
    public function getIdMedecin()
    {
        return $this->idMedecin;
    }

    /**
     * Set idServ
     *
     * @param \Pidev\MedecinBundle\Entity\Service $idServ
     * @return Rdv
     */
    public function setIdServ(\Pidev\MedecinBundle\Entity\Service $idServ = null)
    {
        $this->idServ = $idServ;
    
        return $this;
    }

    /**
     * Get idServ
     *
     * @return \Pidev\MedecinBundle\Entity\Service 
     */
    public function getIdServ()
    {
        return $this->idServ;
    }
    
}
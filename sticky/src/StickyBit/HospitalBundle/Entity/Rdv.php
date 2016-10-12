<?php

namespace StickyBit\HospitalBundle\Entity;

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
    private $idRdv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rdv", type="datetime", nullable=true)
     */
    private $dateRdv;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idserv", referencedColumnName="id_serv")
     * })
     */
    private $idserv;

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
     * Get idRdv
     *
     * @return integer 
     */
    public function getIdRdv()
    {
        return $this->idRdv;
    }

    /**
     * Set idMedecin
     *
     * @param \StickyBit\HospitalBundle\Entity\Medecin $idMedecin
     * @return Rdv
     */
    public function setIdMedecin(\StickyBit\HospitalBundle\Entity\Medecin $idMedecin = null)
    {
        $this->idMedecin = $idMedecin;
    
        return $this;
    }

    /**
     * Get idMedecin
     *
     * @return \StickyBit\HospitalBundle\Entity\Medecin 
     */
    public function getIdMedecin()
    {
        return $this->idMedecin;
    }

    /**
     * Set idPatient
     *
     * @param \StickyBit\HospitalBundle\Entity\Patient $idPatient
     * @return Rdv
     */
    public function setIdPatient(\StickyBit\HospitalBundle\Entity\Patient $idPatient = null)
    {
        $this->idPatient = $idPatient;
    
        return $this;
    }

    /**
     * Get idPatient
     *
     * @return \StickyBit\HospitalBundle\Entity\Patient 
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * Set idserv
     *
     * @param \StickyBit\HospitalBundle\Entity\Service $idserv
     * @return Rdv
     */
    public function setIdserv(\StickyBit\HospitalBundle\Entity\Service $idserv = null)
    {
        $this->idserv = $idserv;
    
        return $this;
    }

    /**
     * Get idserv
     *
     * @return \StickyBit\HospitalBundle\Entity\Service 
     */
    public function getIdserv()
    {
        return $this->idserv;
    }
}
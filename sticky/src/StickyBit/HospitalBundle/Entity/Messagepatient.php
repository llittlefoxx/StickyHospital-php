<?php

namespace StickyBit\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagepatient
 *
 * @ORM\Table(name="messagepatient")
 * @ORM\Entity
 */
class Messagepatient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_msg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMsg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_env", type="datetime", nullable=true)
     */
    private $dateEnv;

    /**
     * @var string
     *
     * @ORM\Column(name="corp", type="string", length=254, nullable=true)
     */
    private $corp;

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
     *   @ORM\JoinColumn(name="idmedecin", referencedColumnName="id_medecin")
     * })
     */
    private $idmedecin;



    /**
     * Set dateEnv
     *
     * @param \DateTime $dateEnv
     * @return Messagepatient
     */
    public function setDateEnv($dateEnv)
    {
        $this->dateEnv = $dateEnv;
    
        return $this;
    }

    /**
     * Get dateEnv
     *
     * @return \DateTime 
     */
    public function getDateEnv()
    {
        return $this->dateEnv;
    }

    /**
     * Set corp
     *
     * @param string $corp
     * @return Messagepatient
     */
    public function setCorp($corp)
    {
        $this->corp = $corp;
    
        return $this;
    }

    /**
     * Get corp
     *
     * @return string 
     */
    public function getCorp()
    {
        return $this->corp;
    }

    /**
     * Get idMsg
     *
     * @return integer 
     */
    public function getIdMsg()
    {
        return $this->idMsg;
    }

    /**
     * Set idPatient
     *
     * @param \StickyBit\HospitalBundle\Entity\Patient $idPatient
     * @return Messagepatient
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
     * Set idmedecin
     *
     * @param \StickyBit\HospitalBundle\Entity\Medecin $idmedecin
     * @return Messagepatient
     */
    public function setIdmedecin(\StickyBit\HospitalBundle\Entity\Medecin $idmedecin = null)
    {
        $this->idmedecin = $idmedecin;
    
        return $this;
    }

    /**
     * Get idmedecin
     *
     * @return \StickyBit\HospitalBundle\Entity\Medecin 
     */
    public function getIdmedecin()
    {
        return $this->idmedecin;
    }
}
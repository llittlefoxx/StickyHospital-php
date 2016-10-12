<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageMed
 *
 * @ORM\Table(name="message_med")
 * @ORM\Entity
 */
class MessageMed
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="corp", type="string", length=254, nullable=true)
     */
    private $corp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_env", type="datetime", nullable=true)
     */
    private $dateEnv;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpatient", referencedColumnName="id_patient")
     * })
     */
    private $idpatient;

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
     * Get idMessage
     *
     * @return integer 
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set corp
     *
     * @param string $corp
     * @return MessageMed
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
     * Set dateEnv
     *
     * @param \DateTime $dateEnv
     * @return MessageMed
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
     * Set idpatient
     *
     * @param \Backend\MedecinBundle\Entity\Patient $idpatient
     * @return MessageMed
     */
    public function setIdpatient(\Backend\MedecinBundle\Entity\Patient $idpatient = null)
    {
        $this->idpatient = $idpatient;
    
        return $this;
    }

    /**
     * Get idpatient
     *
     * @return \Backend\MedecinBundle\Entity\Patient 
     */
    public function getIdpatient()
    {
        return $this->idpatient;
    }

    /**
     * Set idMedecin
     *
     * @param \Backend\MedecinBundle\Entity\Medecin $idMedecin
     * @return MessageMed
     */
    public function setIdMedecin(\Backend\MedecinBundle\Entity\Medecin $idMedecin = null)
    {
        $this->idMedecin = $idMedecin;
    
        return $this;
    }

    /**
     * Get idMedecin
     *
     * @return \Backend\MedecinBundle\Entity\Medecin 
     */
    public function getIdMedecin()
    {
        return $this->idMedecin;
    }
}
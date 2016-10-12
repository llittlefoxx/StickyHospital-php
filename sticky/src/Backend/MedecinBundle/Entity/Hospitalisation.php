<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hospitalisation
 *
 * @ORM\Table(name="hospitalisation")
 * @ORM\Entity
 */
class Hospitalisation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_hos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHos;

    /**
     * @var string
     *
     * @ORM\Column(name="date_h", type="string", length=50, nullable=true)
     */
    private $dateH;

    /**
     * @var string
     *
     * @ORM\Column(name="date_s", type="string", length=50, nullable=true)
     */
    private $dateS;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_med", type="integer", nullable=true)
     */
    private $idMed;

    /**
     * @var string
     *
     * @ORM\Column(name="type_admisssion", type="string", length=254, nullable=true)
     */
    private $typeAdmisssion;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_patient", type="string", length=254, nullable=true)
     */
    private $etatPatient;

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
     * @var \Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adm_login", referencedColumnName="login")
     * })
     */
    private $admLogin;

    /**
     * @var \Lit
     *
     * @ORM\ManyToOne(targetEntity="Lit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lit", referencedColumnName="id_lit")
     * })
     */
    private $idLit;



    /**
     * Get idHos
     *
     * @return integer 
     */
    public function getIdHos()
    {
        return $this->idHos;
    }

    /**
     * Set dateH
     *
     * @param string $dateH
     * @return Hospitalisation
     */
    public function setDateH($dateH)
    {
        $this->dateH = $dateH;
    
        return $this;
    }

    /**
     * Get dateH
     *
     * @return string 
     */
    public function getDateH()
    {
        return $this->dateH;
    }

    /**
     * Set dateS
     *
     * @param string $dateS
     * @return Hospitalisation
     */
    public function setDateS($dateS)
    {
        $this->dateS = $dateS;
    
        return $this;
    }

    /**
     * Get dateS
     *
     * @return string 
     */
    public function getDateS()
    {
        return $this->dateS;
    }

    /**
     * Set idMed
     *
     * @param integer $idMed
     * @return Hospitalisation
     */
    public function setIdMed($idMed)
    {
        $this->idMed = $idMed;
    
        return $this;
    }

    /**
     * Get idMed
     *
     * @return integer 
     */
    public function getIdMed()
    {
        return $this->idMed;
    }

    /**
     * Set typeAdmisssion
     *
     * @param string $typeAdmisssion
     * @return Hospitalisation
     */
    public function setTypeAdmisssion($typeAdmisssion)
    {
        $this->typeAdmisssion = $typeAdmisssion;
    
        return $this;
    }

    /**
     * Get typeAdmisssion
     *
     * @return string 
     */
    public function getTypeAdmisssion()
    {
        return $this->typeAdmisssion;
    }

    /**
     * Set etatPatient
     *
     * @param string $etatPatient
     * @return Hospitalisation
     */
    public function setEtatPatient($etatPatient)
    {
        $this->etatPatient = $etatPatient;
    
        return $this;
    }

    /**
     * Get etatPatient
     *
     * @return string 
     */
    public function getEtatPatient()
    {
        return $this->etatPatient;
    }

    /**
     * Set idPatient
     *
     * @param \Backend\MedecinBundle\Entity\Patient $idPatient
     * @return Hospitalisation
     */
    public function setIdPatient(\Backend\MedecinBundle\Entity\Patient $idPatient = null)
    {
        $this->idPatient = $idPatient;
    
        return $this;
    }

    /**
     * Get idPatient
     *
     * @return \Backend\MedecinBundle\Entity\Patient 
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * Set admLogin
     *
     * @param \Backend\MedecinBundle\Entity\Admin $admLogin
     * @return Hospitalisation
     */
    public function setAdmLogin(\Backend\MedecinBundle\Entity\Admin $admLogin = null)
    {
        $this->admLogin = $admLogin;
    
        return $this;
    }

    /**
     * Get admLogin
     *
     * @return \Backend\MedecinBundle\Entity\Admin 
     */
    public function getAdmLogin()
    {
        return $this->admLogin;
    }

    /**
     * Set idLit
     *
     * @param \Backend\MedecinBundle\Entity\Lit $idLit
     * @return Hospitalisation
     */
    public function setIdLit(\Backend\MedecinBundle\Entity\Lit $idLit = null)
    {
        $this->idLit = $idLit;
    
        return $this;
    }

    /**
     * Get idLit
     *
     * @return \Backend\MedecinBundle\Entity\Lit 
     */
    public function getIdLit()
    {
        return $this->idLit;
    }
}
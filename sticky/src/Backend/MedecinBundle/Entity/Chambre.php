<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity
 */
class Chambre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chambre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=254, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=25, nullable=true)
     */
    private $etat;

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
     * Get idChambre
     *
     * @return integer 
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Chambre
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    
        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Chambre
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Chambre
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set idServ
     *
     * @param \Backend\MedecinBundle\Entity\Service $idServ
     * @return Chambre
     */
    public function setIdServ(\Backend\MedecinBundle\Entity\Service $idServ = null)
    {
        $this->idServ = $idServ;
    
        return $this;
    }

    /**
     * Get idServ
     *
     * @return \Backend\MedecinBundle\Entity\Service 
     */
    public function getIdServ()
    {
        return $this->idServ;
    }
}
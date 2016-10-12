<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lit
 *
 * @ORM\Table(name="lit")
 * @ORM\Entity
 */
class Lit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_lit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLit;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=25, nullable=true)
     */
    private $etat;

    /**
     * @var \Chambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chambre", referencedColumnName="id_chambre")
     * })
     */
    private $idChambre;

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
     * Get idLit
     *
     * @return integer 
     */
    public function getIdLit()
    {
        return $this->idLit;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Lit
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
     * Set idChambre
     *
     * @param \Backend\MedecinBundle\Entity\Chambre $idChambre
     * @return Lit
     */
    public function setIdChambre(\Backend\MedecinBundle\Entity\Chambre $idChambre = null)
    {
        $this->idChambre = $idChambre;
    
        return $this;
    }

    /**
     * Get idChambre
     *
     * @return \Backend\MedecinBundle\Entity\Chambre 
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }

    /**
     * Set idServ
     *
     * @param \Backend\MedecinBundle\Entity\Service $idServ
     * @return Lit
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
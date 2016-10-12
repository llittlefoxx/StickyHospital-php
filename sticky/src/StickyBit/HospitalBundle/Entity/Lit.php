<?php

namespace StickyBit\HospitalBundle\Entity;

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
     * Get idLit
     *
     * @return integer 
     */
    public function getIdLit()
    {
        return $this->idLit;
    }

    /**
     * Set idServ
     *
     * @param \StickyBit\HospitalBundle\Entity\Service $idServ
     * @return Lit
     */
    public function setIdServ(\StickyBit\HospitalBundle\Entity\Service $idServ = null)
    {
        $this->idServ = $idServ;
    
        return $this;
    }

    /**
     * Get idServ
     *
     * @return \StickyBit\HospitalBundle\Entity\Service 
     */
    public function getIdServ()
    {
        return $this->idServ;
    }

    /**
     * Set idChambre
     *
     * @param \StickyBit\HospitalBundle\Entity\Chambre $idChambre
     * @return Lit
     */
    public function setIdChambre(\StickyBit\HospitalBundle\Entity\Chambre $idChambre = null)
    {
        $this->idChambre = $idChambre;
    
        return $this;
    }

    /**
     * Get idChambre
     *
     * @return \StickyBit\HospitalBundle\Entity\Chambre 
     */
    public function getIdChambre()
    {
        return $this->idChambre;
    }
}
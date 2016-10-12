<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_serv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServ;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_serv", type="string", length=254, nullable=true)
     */
    private $nomServ;



    /**
     * Get idServ
     *
     * @return integer 
     */
    public function getIdServ()
    {
        return $this->idServ;
    }

    /**
     * Set nomServ
     *
     * @param string $nomServ
     * @return Service
     */
    public function setNomServ($nomServ)
    {
        $this->nomServ = $nomServ;
    
        return $this;
    }

    /**
     * Get nomServ
     *
     * @return string 
     */
    public function getNomServ()
    {
        return $this->nomServ;
    }
}
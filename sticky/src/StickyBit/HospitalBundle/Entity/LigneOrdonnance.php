<?php

namespace StickyBit\HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneOrdonnance
 *
 * @ORM\Table(name="ligne_ordonnance")
 * @ORM\Entity
 */
class LigneOrdonnance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ligne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigne;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Ordonnance
     *
     * @ORM\ManyToOne(targetEntity="Ordonnance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordonnance", referencedColumnName="id_ordonnance")
     * })
     */
    private $idOrdonnance;



    /**
     * Set description
     *
     * @param string $description
     * @return LigneOrdonnance
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idLigne
     *
     * @return integer 
     */
    public function getIdLigne()
    {
        return $this->idLigne;
    }

    /**
     * Set idOrdonnance
     *
     * @param \StickyBit\HospitalBundle\Entity\Ordonnance $idOrdonnance
     * @return LigneOrdonnance
     */
    public function setIdOrdonnance(\StickyBit\HospitalBundle\Entity\Ordonnance $idOrdonnance = null)
    {
        $this->idOrdonnance = $idOrdonnance;
    
        return $this;
    }

    /**
     * Get idOrdonnance
     *
     * @return \StickyBit\HospitalBundle\Entity\Ordonnance 
     */
    public function getIdOrdonnance()
    {
        return $this->idOrdonnance;
    }
}
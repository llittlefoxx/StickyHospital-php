<?php

namespace Backend\MedecinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneFacture
 *
 * @ORM\Table(name="ligne_facture")
 * @ORM\Entity
 */
class LigneFacture
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_ligne", type="string", length=254, nullable=true)
     */
    private $libLigne;

    /**
     * @var \Medicament
     *
     * @ORM\ManyToOne(targetEntity="Medicament")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_medicament", referencedColumnName="id_medicament")
     * })
     */
    private $idMedicament;

    /**
     * @var \Intervention
     *
     * @ORM\ManyToOne(targetEntity="Intervention")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intervention", referencedColumnName="id_intervention")
     * })
     */
    private $idIntervention;

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_facture", referencedColumnName="id_facture")
     * })
     */
    private $idFacture;



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
     * Set quantite
     *
     * @param integer $quantite
     * @return LigneFacture
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return LigneFacture
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set libLigne
     *
     * @param string $libLigne
     * @return LigneFacture
     */
    public function setLibLigne($libLigne)
    {
        $this->libLigne = $libLigne;
    
        return $this;
    }

    /**
     * Get libLigne
     *
     * @return string 
     */
    public function getLibLigne()
    {
        return $this->libLigne;
    }

    /**
     * Set idMedicament
     *
     * @param \Backend\MedecinBundle\Entity\Medicament $idMedicament
     * @return LigneFacture
     */
    public function setIdMedicament(\Backend\MedecinBundle\Entity\Medicament $idMedicament = null)
    {
        $this->idMedicament = $idMedicament;
    
        return $this;
    }

    /**
     * Get idMedicament
     *
     * @return \Backend\MedecinBundle\Entity\Medicament 
     */
    public function getIdMedicament()
    {
        return $this->idMedicament;
    }

    /**
     * Set idIntervention
     *
     * @param \Backend\MedecinBundle\Entity\Intervention $idIntervention
     * @return LigneFacture
     */
    public function setIdIntervention(\Backend\MedecinBundle\Entity\Intervention $idIntervention = null)
    {
        $this->idIntervention = $idIntervention;
    
        return $this;
    }

    /**
     * Get idIntervention
     *
     * @return \Backend\MedecinBundle\Entity\Intervention 
     */
    public function getIdIntervention()
    {
        return $this->idIntervention;
    }

    /**
     * Set idFacture
     *
     * @param \Backend\MedecinBundle\Entity\Facture $idFacture
     * @return LigneFacture
     */
    public function setIdFacture(\Backend\MedecinBundle\Entity\Facture $idFacture = null)
    {
        $this->idFacture = $idFacture;
    
        return $this;
    }

    /**
     * Get idFacture
     *
     * @return \Backend\MedecinBundle\Entity\Facture 
     */
    public function getIdFacture()
    {
        return $this->idFacture;
    }
}
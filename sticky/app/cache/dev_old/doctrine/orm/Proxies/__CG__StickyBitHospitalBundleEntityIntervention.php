<?php

namespace Proxies\__CG__\StickyBit\HospitalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Intervention extends \StickyBit\HospitalBundle\Entity\Intervention implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setLibIntervention($libIntervention)
    {
        $this->__load();
        return parent::setLibIntervention($libIntervention);
    }

    public function getLibIntervention()
    {
        $this->__load();
        return parent::getLibIntervention();
    }

    public function setPrixInterv($prixInterv)
    {
        $this->__load();
        return parent::setPrixInterv($prixInterv);
    }

    public function getPrixInterv()
    {
        $this->__load();
        return parent::getPrixInterv();
    }

    public function setDateInterv($dateInterv)
    {
        $this->__load();
        return parent::setDateInterv($dateInterv);
    }

    public function getDateInterv()
    {
        $this->__load();
        return parent::getDateInterv();
    }

    public function getIdIntervention()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idIntervention"];
        }
        $this->__load();
        return parent::getIdIntervention();
    }

    public function setIdDossiermedical(\StickyBit\HospitalBundle\Entity\DossierMedical $idDossiermedical = NULL)
    {
        $this->__load();
        return parent::setIdDossiermedical($idDossiermedical);
    }

    public function getIdDossiermedical()
    {
        $this->__load();
        return parent::getIdDossiermedical();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'libIntervention', 'prixInterv', 'dateInterv', 'idIntervention', 'idDossiermedical');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
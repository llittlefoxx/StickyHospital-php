<?php

namespace Proxies\__CG__\StickyBit\HospitalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Medecin extends \StickyBit\HospitalBundle\Entity\Medecin implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setNomMedecin($nomMedecin)
    {
        $this->__load();
        return parent::setNomMedecin($nomMedecin);
    }

    public function getNomMedecin()
    {
        $this->__load();
        return parent::getNomMedecin();
    }

    public function setPrenomMedecin($prenomMedecin)
    {
        $this->__load();
        return parent::setPrenomMedecin($prenomMedecin);
    }

    public function getPrenomMedecin()
    {
        $this->__load();
        return parent::getPrenomMedecin();
    }

    public function setAdresseMedecin($adresseMedecin)
    {
        $this->__load();
        return parent::setAdresseMedecin($adresseMedecin);
    }

    public function getAdresseMedecin()
    {
        $this->__load();
        return parent::getAdresseMedecin();
    }

    public function setMailMedecin($mailMedecin)
    {
        $this->__load();
        return parent::setMailMedecin($mailMedecin);
    }

    public function getMailMedecin()
    {
        $this->__load();
        return parent::getMailMedecin();
    }

    public function setTelMedecin($telMedecin)
    {
        $this->__load();
        return parent::setTelMedecin($telMedecin);
    }

    public function getTelMedecin()
    {
        $this->__load();
        return parent::getTelMedecin();
    }

    public function setSpecialiteMedecin($specialiteMedecin)
    {
        $this->__load();
        return parent::setSpecialiteMedecin($specialiteMedecin);
    }

    public function getSpecialiteMedecin()
    {
        $this->__load();
        return parent::getSpecialiteMedecin();
    }

    public function setCinMedecin($cinMedecin)
    {
        $this->__load();
        return parent::setCinMedecin($cinMedecin);
    }

    public function getCinMedecin()
    {
        $this->__load();
        return parent::getCinMedecin();
    }

    public function getIdMedecin()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idMedecin"];
        }
        $this->__load();
        return parent::getIdMedecin();
    }

    public function setIdService(\StickyBit\HospitalBundle\Entity\Service $idService = NULL)
    {
        $this->__load();
        return parent::setIdService($idService);
    }

    public function getIdService()
    {
        $this->__load();
        return parent::getIdService();
    }

    public function getUrlphoto()
    {
        $this->__load();
        return parent::getUrlphoto();
    }

    public function setUrlphoto($urlphoto)
    {
        $this->__load();
        return parent::setUrlphoto($urlphoto);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'nomMedecin', 'prenomMedecin', 'adresseMedecin', 'mailMedecin', 'telMedecin', 'specialiteMedecin', 'cinMedecin', 'idMedecin', 'idService');
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
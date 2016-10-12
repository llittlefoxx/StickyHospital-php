<?php

namespace Proxies\__CG__\Backend\MedecinBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Dossier extends \Backend\MedecinBundle\Entity\Dossier implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getIdDossierpatient()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idDossierpatient"];
        }
        $this->__load();
        return parent::getIdDossierpatient();
    }

    public function getDateCreationDossier()
    {
        $this->__load();
        return parent::getDateCreationDossier();
    }

    public function getIdPatient()
    {
        $this->__load();
        return parent::getIdPatient();
    }

    public function setDateCreationDossier($dateCreationDossier)
    {
        $this->__load();
        return parent::setDateCreationDossier($dateCreationDossier);
    }

    public function setIdPatient(\Backend\MedecinBundle\Entity\Patient $idPatient = NULL)
    {
        $this->__load();
        return parent::setIdPatient($idPatient);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idDossierpatient', 'dateCreationDossier', 'idPatient');
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
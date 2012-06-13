<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class FapescTutorialBundleEntityConciliacaoProxy extends \Fapesc\TutorialBundle\Entity\Conciliacao implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setData($data)
    {
        $this->__load();
        return parent::setData($data);
    }

    public function getData($format = 'd/m/Y')
    {
        $this->__load();
        return parent::getData($format);
    }

    public function setSaldo($saldo)
    {
        $this->__load();
        return parent::setSaldo($saldo);
    }

    public function getSaldo($puro = false)
    {
        $this->__load();
        return parent::getSaldo($puro);
    }

    public function setRelatorio($relatorio)
    {
        $this->__load();
        return parent::setRelatorio($relatorio);
    }

    public function getRelatorio()
    {
        $this->__load();
        return parent::getRelatorio();
    }

    public function addCheque(\Fapesc\TutorialBundle\Entity\Cheque $cheques)
    {
        $this->__load();
        return parent::addCheque($cheques);
    }

    public function getCheques()
    {
        $this->__load();
        return parent::getCheques();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'data', 'saldo', 'cheques', 'relatorio');
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
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
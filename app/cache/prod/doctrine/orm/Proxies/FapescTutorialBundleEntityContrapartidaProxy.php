<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class FapescTutorialBundleEntityContrapartidaProxy extends \Fapesc\TutorialBundle\Entity\Contrapartida implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDispendio($dispendio)
    {
        $this->__load();
        return parent::setDispendio($dispendio);
    }

    public function getDispendio()
    {
        $this->__load();
        return parent::getDispendio();
    }

    public function setRelatorio(\Fapesc\TutorialBundle\Entity\Relatorio $relatorio)
    {
        $this->__load();
        return parent::setRelatorio($relatorio);
    }

    public function getRelatorio()
    {
        $this->__load();
        return parent::getRelatorio();
    }

    public function setCategoria($categoria)
    {
        $this->__load();
        return parent::setCategoria($categoria);
    }

    public function getCategoria()
    {
        $this->__load();
        return parent::getCategoria();
    }

    public function getCategorias()
    {
        $this->__load();
        return parent::getCategorias();
    }

    public function setItem($item)
    {
        $this->__load();
        return parent::setItem($item);
    }

    public function getItem()
    {
        $this->__load();
        return parent::getItem();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'categoria', 'item', 'relatorio');
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
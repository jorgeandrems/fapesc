<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class FapescTutorialBundleEntityDispendioProxy extends \Fapesc\TutorialBundle\Entity\Dispendio implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDescricao($descricao)
    {
        $this->__load();
        return parent::setDescricao($descricao);
    }

    public function getDescricao()
    {
        $this->__load();
        return parent::getDescricao();
    }

    public function setUnidade($unidade)
    {
        $this->__load();
        return parent::setUnidade($unidade);
    }

    public function getUnidade()
    {
        $this->__load();
        return parent::getUnidade();
    }

    public function setQuantidade($quantidade)
    {
        $this->__load();
        return parent::setQuantidade($quantidade);
    }

    public function getQuantidade()
    {
        $this->__load();
        return parent::getQuantidade();
    }

    public function setUnitario($unitario)
    {
        $this->__load();
        return parent::setUnitario($unitario);
    }

    public function getUnitario($puro = false)
    {
        $this->__load();
        return parent::getUnitario($puro);
    }

    public function setTotal($total)
    {
        $this->__load();
        return parent::setTotal($total);
    }

    public function getTotal($puro = false)
    {
        $this->__load();
        return parent::getTotal($puro);
    }

    public function setDocumento($documento)
    {
        $this->__load();
        return parent::setDocumento($documento);
    }

    public function getDocumento()
    {
        $this->__load();
        return parent::getDocumento();
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

    public function setComprovante($comprovante)
    {
        $this->__load();
        return parent::setComprovante($comprovante);
    }

    public function getComprovante()
    {
        $this->__load();
        return parent::getComprovante();
    }

    public function setFornecedor(\Fapesc\TutorialBundle\Entity\Fornecedor $fornecedor)
    {
        $this->__load();
        return parent::setFornecedor($fornecedor);
    }

    public function getFornecedor()
    {
        $this->__load();
        return parent::getFornecedor();
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function populate($data)
    {
        $this->__load();
        return parent::populate($data);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'categoria', 'descricao', 'unidade', 'quantidade', 'unitario', 'total', 'documento', 'data', 'comprovante', 'fornecedor');
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
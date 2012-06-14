<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class FapescTutorialBundleEntityProjetoProxy extends \Fapesc\TutorialBundle\Entity\Projeto implements \Doctrine\ORM\Proxy\Proxy
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

    public function setContrato($contrato)
    {
        $this->__load();
        return parent::setContrato($contrato);
    }

    public function getContrato()
    {
        $this->__load();
        return parent::getContrato();
    }

    public function setTitulo($titulo)
    {
        $this->__load();
        return parent::setTitulo($titulo);
    }

    public function getTitulo()
    {
        $this->__load();
        return parent::getTitulo();
    }

    public function setChamada($chamada)
    {
        $this->__load();
        return parent::setChamada($chamada);
    }

    public function getChamada()
    {
        $this->__load();
        return parent::getChamada();
    }

    public function setArea($area)
    {
        $this->__load();
        return parent::setArea($area);
    }

    public function getArea()
    {
        $this->__load();
        return parent::getArea();
    }

    public function setMunicipio($municipio)
    {
        $this->__load();
        return parent::setMunicipio($municipio);
    }

    public function getMunicipio()
    {
        $this->__load();
        return parent::getMunicipio();
    }

    public function setRegiao($regiao)
    {
        $this->__load();
        return parent::setRegiao($regiao);
    }

    public function getRegiao()
    {
        $this->__load();
        return parent::getRegiao();
    }

    public function setSdr($sdr)
    {
        $this->__load();
        return parent::setSdr($sdr);
    }

    public function getSdr()
    {
        $this->__load();
        return parent::getSdr();
    }

    public function setOrcamento($orcamento)
    {
        $this->__load();
        return parent::setOrcamento($orcamento);
    }

    public function getOrcamento()
    {
        $this->__load();
        return parent::getOrcamento();
    }

    public function setBanco($banco)
    {
        $this->__load();
        return parent::setBanco($banco);
    }

    public function getBanco()
    {
        $this->__load();
        return parent::getBanco();
    }

    public function setConta($conta)
    {
        $this->__load();
        return parent::setConta($conta);
    }

    public function getConta()
    {
        $this->__load();
        return parent::getConta();
    }

    public function setAgencia($agencia)
    {
        $this->__load();
        return parent::setAgencia($agencia);
    }

    public function getAgencia()
    {
        $this->__load();
        return parent::getAgencia();
    }

    public function setResumo($resumo)
    {
        $this->__load();
        return parent::setResumo($resumo);
    }

    public function getResumo()
    {
        $this->__load();
        return parent::getResumo();
    }

    public function setAtivo($ativo)
    {
        $this->__load();
        return parent::setAtivo($ativo);
    }

    public function getAtivo()
    {
        $this->__load();
        return parent::getAtivo();
    }

    public function setInicio($inicio)
    {
        $this->__load();
        return parent::setInicio($inicio);
    }

    public function getInicio()
    {
        $this->__load();
        return parent::getInicio();
    }

    public function setTermino($termino)
    {
        $this->__load();
        return parent::setTermino($termino);
    }

    public function getTermino()
    {
        $this->__load();
        return parent::getTermino();
    }

    public function addRelatorio(\Fapesc\TutorialBundle\Entity\Relatorio $relatorios)
    {
        $this->__load();
        return parent::addRelatorio($relatorios);
    }

    public function getRelatorios()
    {
        $this->__load();
        return parent::getRelatorios();
    }

    public function addMeta(\Fapesc\TutorialBundle\Entity\Meta $metas)
    {
        $this->__load();
        return parent::addMeta($metas);
    }

    public function getMetas()
    {
        $this->__load();
        return parent::getMetas();
    }

    public function setUsuario(\Fapesc\TutorialBundle\Entity\Usuario $usuario)
    {
        $this->__load();
        return parent::setUsuario($usuario);
    }

    public function getUsuario()
    {
        $this->__load();
        return parent::getUsuario();
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
        return array('__isInitialized__', 'id', 'contrato', 'titulo', 'chamada', 'area', 'municipio', 'regiao', 'sdr', 'inicio', 'termino', 'orcamento', 'banco', 'conta', 'agencia', 'resumo', 'ativo', 'usuario', 'metas', 'relatorios');
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
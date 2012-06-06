<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class FapescTutorialBundleEntityUsuarioProxy extends \Fapesc\TutorialBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
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

    public function setNome($nome)
    {
        $this->__load();
        return parent::setNome($nome);
    }

    public function getNome()
    {
        $this->__load();
        return parent::getNome();
    }

    public function setCpf($cpf)
    {
        $this->__load();
        return parent::setCpf($cpf);
    }

    public function getCpf()
    {
        $this->__load();
        return parent::getCpf();
    }

    public function setSenha($senha)
    {
        $this->__load();
        return parent::setSenha($senha);
    }

    public function getSenha()
    {
        $this->__load();
        return parent::getSenha();
    }

    public function setInstituicao($instituicao)
    {
        $this->__load();
        return parent::setInstituicao($instituicao);
    }

    public function getInstituicao()
    {
        $this->__load();
        return parent::getInstituicao();
    }

    public function setEndereco($endereco)
    {
        $this->__load();
        return parent::setEndereco($endereco);
    }

    public function getEndereco()
    {
        $this->__load();
        return parent::getEndereco();
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

    public function setUf($uf)
    {
        $this->__load();
        return parent::setUf($uf);
    }

    public function getUf()
    {
        $this->__load();
        return parent::getUf();
    }

    public function setCep($cep)
    {
        $this->__load();
        return parent::setCep($cep);
    }

    public function getCep()
    {
        $this->__load();
        return parent::getCep();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setFone($fone)
    {
        $this->__load();
        return parent::setFone($fone);
    }

    public function getFone()
    {
        $this->__load();
        return parent::getFone();
    }

    public function equals(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
        $this->__load();
        return parent::equals($user);
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function addProjeto(\Fapesc\TutorialBundle\Entity\Projeto $projetos)
    {
        $this->__load();
        return parent::addProjeto($projetos);
    }

    public function getProjetos()
    {
        $this->__load();
        return parent::getProjetos();
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function populate($dados)
    {
        $this->__load();
        return parent::populate($dados);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'cpf', 'nome', 'instituicao', 'endereco', 'municipio', 'uf', 'cep', 'email', 'fone', 'senha', 'projetos');
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
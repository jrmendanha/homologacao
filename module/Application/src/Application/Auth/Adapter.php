<?php

namespace Application\Auth;

use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Authentication\Result;
use Doctrine\ORM\EntityManager;

class Adapter implements AdapterInterface{
    
    protected $em;
    protected $username;
    protected $password;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function authenticate() {
        
        $repoFuncionario = $this->em->getRepository('Application\Entity\Funcionario');
        
        $funcionario = $repoFuncionario->buscarLoginUsuario($this->getUsername(), $this->getPassword());
        if($funcionario){
            return new Result(Result::SUCCESS, array('funcionarioUser' => $funcionario), array('OK'));
        }else{
            return new Result(Result:: FAILURE, NULL, array());
        }
    }

}

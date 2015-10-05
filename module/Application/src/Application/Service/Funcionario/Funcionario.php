<?php

namespace Application\Service\Funcionario;

use Doctrine\ORM\EntityManager;
use Application\Entity\Funcionario as FuncionarioEntity;
use Zend\Stdlib\Hydrator;

class Funcionario {

    /**
     * @var Entity Manager 
     */
    protected $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function inserirFuncionario(array $arrayFuncionario) {
//        date('d/m/Y H:i:s', strtotime($data));
        $funcionarioEntity = new FuncionarioEntity($arrayFuncionario);

        $this->em->persist($funcionarioEntity);
        $this->em->flush();

        return $funcionarioEntity;
    }

    public function atualizarFuncionario(array $arrayFuncionario, FuncionarioEntity $funcionarioEntity) {
        
        

        (new Hydrator\ClassMethods())->hydrate($arrayFuncionario, $funcionarioEntity);

        $this->em->persist($funcionarioEntity);
        $this->em->flush();

        return $funcionarioEntity;
    }

}

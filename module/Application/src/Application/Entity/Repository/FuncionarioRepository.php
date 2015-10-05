<?php

namespace Application\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class FuncionarioRepository extends EntityRepository{
    

    public function buscarLoginUsuario($usuario, $password){
        
        $usuario = $this->findOneBy(array('usuarioFunc' => $usuario));
        
        if($usuario){
            if($usuario->getSenhaFunc() == $password){
                return true;
            }else{
                return false;
            }
        }
    }
    
}

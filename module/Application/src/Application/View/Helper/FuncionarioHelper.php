<?php

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class FuncionarioHelper extends AbstractHelper {


    public function traduzStatusFuncionario($status) {

        $classeLinha = '';

        if ($status == 1) {
            $status = 'Ativo';
//            $classeLinha = 'success';
        }
        if ($status == 2) {
            $status = 'Desativado';
            $classeLinha = 'danger';
        }

        return array('status' => $status, 'classeLinha' => $classeLinha);
//        return $status;
    }
    
//    public function traduzClasse

}

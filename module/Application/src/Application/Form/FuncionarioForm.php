<?php

namespace Application\Form;

use Zend\Form\Form;

class FuncionarioForm extends Form {

    public function __construct() {
        parent::__construct('FuncionarioForm');

        $this->setAttribute('action', '');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'form-horizontal');

        $this->add(array(
            'name' => 'nomeFunc',
            'attributes' => array(
                'type' => 'text',
                'id' => 'nomeFunc',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Nome:',
                'label_attributes' => array('class' => 'col-sm-2 control-label')
            ),
        ));
        $this->add(array(
            'name' => 'funcaoFunc',
            'attributes' => array(
                'type' => 'text',
                'id' => 'funcaoFunc',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Função:',
                'label_attributes' => array('class' => 'col-sm-2 control-label')
            ),
        ));
        $this->add(array(
            'name' => 'cpfFunc',
            'attributes' => array(
                'type' => 'text',
                'id' => 'cpfFunc',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Cpf:',
                'label_attributes' => array('class' => 'col-sm-2 control-label')
            ),
        ));

        $this->add(array(
            'name' => 'rgFunc',
            'attributes' => array(
                'type' => 'text',
                'id' => 'rgFunc',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Rg:',
                'label_attributes' => array('class' => 'col-sm-4 control-label')
            ),
        ));

        $this->add(array(
            'name' => 'orgEmissorFunc',
            'attributes' => array(
                'type' => 'text',
                'id' => 'orgEmissorFunc',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Orgão Emissor:',
                'label_attributes' => array('class' => 'col-sm-6 control-label')
            ),
        ));
        $this->add(array(
            'name' => 'dataAniversaroFunc',
            'attributes' => array(
                'type' => 'text',
                'id' => 'dataAniversaroFunc',
                'class' => 'form-control calendario',
                'placeholder' => 'Aniversário',
                'aria-describedby' => 'basic-addon1'
            ),
            'options' => array(
                'label' => 'Data de Aniversário:',
                'label_attributes' => array('class' => 'col-sm-5 control-label')
            ),
        ));

        $this->add(array(
            'type' => 'radio    ',
            'name' => 'situacaoFunc',
            'options' => array(
                'label' => 'Status: ',
                'label_attributes' => array('class' => 'col-sm-2 control-label'),
                'value_options' => array(
                    'Ativo' => array(
                        'label' => 'Ativo',
                        'label_attributes' => array('class' => 'col-sm-4 control-label'),
                        'value' => '1',
                        'class' => '',
                        'attributes' => array(
                            
                        ),
                    ),
                    'Desativado' => array(
                        'label' => 'Desativado',
                        'label_attributes' => array('class' => 'col-sm-4 control-label'),
                        'value' => '2',
                        'class' => '',
                        'attributes' => array(
                            
                        ),
                    ),
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'idFunc',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));

//        $this->add(array(
//            'type' => 'Zend\Form\Element\Captcha',
//            'name' => 'captcha',
//            'options' => array(
//                'label' => 'Please verify you are human.',
//                'captcha' => $this->captcha,
//            ),

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Cadastrar',
                'class' => 'btn btn-default'
            ),
            'options' => array(
            'label' => '<i class="icon icon-foo"></i> Cadastrar',
            'label_options' => array(
                'disable_html_escape' => true,
            )
        ),
        ));
    }

}

<?php

namespace Application\Form;

use Zend\Form\Form;

class LoginForm extends Form {

    public function __construct() {
        parent::__construct('LoginForm');

        $this->setAttribute('action', '');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'form-horizontal');

        $this->add(array(
            'name' => 'usuarioFunc',
            'attributes' => array(
                'type' => 'text',
                'id' => 'usuarioFunc',
                'class' => 'form-control',
                'placeholder' => 'Entre com o usuário'
            ),
            'options' => array(
                'label' => 'Usuário:',
                'label_attributes' => array('class' => 'col-sm-2 control-label')
            ),
        ));
        $this->add(array(
            'name' => 'senhaFunc',
            'attributes' => array(
                'type' => 'password',
                'id' => 'senhaFunc',
                'class' => 'form-control',
                'placeholder' => 'Entre com a senha'
            ),
            'options' => array(
                'label' => 'Senha:',
                'label_attributes' => array('class' => 'col-sm-2 control-label')
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Entrar',
                'class' => 'btn btn-default',
                'style' => 'width: 245px;'
            ),
            'options' => array(
                'label' => ' Entrar',
                'label_options' => array(
                    'disable_html_escape' => true,
                )
            ),
        ));
    }

}

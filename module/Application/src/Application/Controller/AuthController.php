<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Storage\Session as SessionStorage;
use Application\Form\LoginForm;

class AuthController extends AbstractActionController {

    public function indexAction() {
        $this->layout('layout/layoutLogin');
        
        $request = $this->getRequest();
        $form = new LoginForm();

        if ($request->isPost()) {
            $form->setData($request->getPost()->toArray());

            if ($form->isValid()) {
                $post = $request->getPost()->toArray();
                #Criando storage para gravar sessão de authenticacação
                $sessionStorage = new SessionStorage('FuncSessao');

                $auth = new AuthenticationService();
                $auth->setStorage($sessionStorage); #Definindo session storage pra auth

                $authAdapter = $this->getServiceLocator()->get('Application\Auth\Adapter');
                $authAdapter->setUsername($post['usuarioFunc']);
                $authAdapter->setPassword($post['senhaFunc']);

                $result = $auth->authenticate($authAdapter);

                if ($result->isValid()) {
                    $sessionStorage->write($auth->getIdentity()['funcionarioUser']);

                    return $this->redirect()->toUrl('/application/index/index');
                } else {
                    var_dump("ERROR");
                    $error = true;
                }
            }
        }
        $view = new ViewModel();


        $view->setVariable('form', $form);

        return $view;
    }

    public function logoutAction() {
        $auth = new AuthenticationService();
        $auth->setStorage(new SessionStorage('FuncSessao')); #Definindo session storage pra auth
        $auth->clearIdentity();
        
        return $this->redirect()->toUrl('/application/auth/index');
    }

}

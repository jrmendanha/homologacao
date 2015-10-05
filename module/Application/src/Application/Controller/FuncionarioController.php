<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\FuncionarioForm;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Storage\Session as SessionStorage;

class FuncionarioController extends AbstractActionController {

    private $_em;

    private function _getEntityManager() {
        if (null === $this->_em) {
            $this->_em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->_em;
    }

    public function indexAction() {
        $auth = new AuthenticationService();

        $authAdapter = $this->getServiceLocator()->get('Application\Auth\Adapter');
        $result = $auth->authenticate($authAdapter);
//        var_dump($result->getIdentity());

        #Busco todos os funcionarios para listar na index
        $funcionarios = $this->_getEntityManager()->getRepository('Application\Entity\Funcionario')->findAll();

        $view = new ViewModel();
        $form = new FuncionarioForm();

        $view->setVariable('funcionarios', $funcionarios);
        $view->setVariable('form', $form);

        return $view;
    }

    public function adicionarFuncionarioAction() {

        $view = new ViewModel();
        $form = new FuncionarioForm();

        #funcionarioService
        $funcionarioService = $this->getServiceLocator()->get('Application\Service\FuncionarioService');

        $idFunc = $this->params()->fromRoute('id', 0);
        $flagUpdate = false;

        $entityFunc = $this->_getEntityManager()->getReference('Application\Entity\Funcionario', $idFunc);

        if ($idFunc != 0) {
            #mudo a label do button submit para salvar
            $form->get('submit')->setLabel(' Salvar');
            $form->setData($entityFunc->toArray());
            $flagUpdate = true;
        }


        $request = $this->getRequest();

        if ($request->isPost()) {
            $postArray = $request->getPost()->toArray();
            if (!$flagUpdate) {
                $funcionarioService->inserirFuncionario($postArray);
            } else {

                $funcionarioService->atualizarFuncionario($postArray, $entityFunc);
            }

            return $this->redirect()->toUrl('/application/funcionario/index');
        }


        $view->setVariable('form', $form);
        return $view;
    }

}

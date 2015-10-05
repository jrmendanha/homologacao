<?php

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\ModuleManager\ModuleManager;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Storage\Session as SessionStorage;
use Application\Service\Funcionario\Funcionario as FuncionarioService;
use Application\Auth\Adapter as AuthAdapter;

use Zend\EventManager\EventInterface;

class Module {

    public function onBootstrap(MvcEvent $e) {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $eventManager->attach(MvcEvent::EVENT_DISPATCH, array($this, 'verificaIdentidade'));
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function init(ModuleManager $moduloManager) {
//        $sharedEvents = $moduloManager->getEventManager()->getSharedManager();
//        $sharedEvents->attach('ApplicationAuth', 'dispatch', function($e) {
//
//            $auth = new AuthenticationService;
//            $auth->setStorage(new SessionStorage('FuncSessao'));
//
//            $controller = $e->getTarget();
//            $matchedRoute = $controller->getEvent()->getRouteMatch()->getMatchedRouteName();
//            var_dump($matchedRoute);
//            die('dead');
//            if (!$auth->hasIdentity() and ( $matchedRoute == "application/default")) {
//                return $controller->redirect()->toUrl('/application/auth/index');
//            }
//        }, 100);
    }

    public function verificaIdentidade(EventInterface $e) {

        $auth = new AuthenticationService;
        $auth->setStorage(new SessionStorage('FuncSessao'));
        
        $controller = $e->getTarget();
        
//        var_dump($controller->getMvcEvent()->getController()->redirect()->toRoute('a'));
        
        $matchedRoute = $controller->getEvent()->getRouteMatch()->getMatchedRouteName();
//        var_dump($matchedRoute);
        if (!$auth->hasIdentity() && ( $matchedRoute == "application/default" || $matchedRoute == "home")) {
            return $controller->redirect()->toRoute('application-auth');
        }
    }

    public function getViewHelperConfig() {
        return array(
            'invokables' => array(
                'funcionarioHelper'
                => 'Application\View\Helper\FuncionarioHelper'
            )
        );
    }

    public function getServiceConfig() {

        return array(
            'factories' => array(
                'Application\Service\FuncionarioService' => function($sm) {
            return new FuncionarioService($sm->get('Doctrine\ORM\EntityManager'));
        },
                'Application\Auth\Adapter' => function($sm) {
            return new AuthAdapter($sm->get('Doctrine\ORM\EntityManager'));
        }
            )
        );
    }

}

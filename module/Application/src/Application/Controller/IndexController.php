<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    
    private $_em;
    
    private function _getEntityManager(){
        if(null === $this->_em){
            $this->_em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        
        return $this->_em;
    }
    
    public function indexAction()
    {
//        var_dump($this->getEvent()->getRouteMatch()->getMatchedRouteName());
        return new ViewModel();
    }
}

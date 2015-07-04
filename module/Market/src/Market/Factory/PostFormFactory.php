<?php
namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Form\PostForm;

class PostFormFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm) {
        //$allServices = $controllerManager->getServiceLocator();
        //$sm = $allServices->get('ServiceManager');       
        $categories = $sm->get('categories');
        
        $form = new PostForm();
        $form->setCategories($categories);
        $form->builtForm();
        $form->setInputFilter($sm->get('market-post-filter'));
        
        //$postController = new \Market\Controller\PostController();
        //$postController->setCategories($categories);
        
        return $form;
    }   
}


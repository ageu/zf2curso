<?php
namespace Market\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Form\PostFilter;
use Zend\ServiceManager\FactoryInterface;

class PostFilterFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $sm){
        $filter = new PostFilter();
        $filter->setCategories($sm->get('categories'));
        $filter->buildFilter();
        return $filter;
    }
    
}


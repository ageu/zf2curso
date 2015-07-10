<?php
namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    use ListingsTableTrait;
    
    public function indexAction()
    {
        $messages = array();
        if ($this->flashmessenger()->hasMessages()){
            $messages = $this->flashmessenger()->getMessages();    
        }
        
        $itemRecent = $this->listingsTable->getLetestListing();
        
        return array('messages'=>$messages, 'item'=>$itemRecent);
        
        //return new ViewModel(array('messages'=>$messages));
    }
}

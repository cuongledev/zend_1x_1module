<?php

Class ViewController extends Zend_Controller_Action{

    protected function indexAction(){
        $this->_helper->layout->setLayout('main');

        $this->view->data = array(
          'Le Ngoc Cuong',
          '30'
        );
    }
    public function index3Action(){
        $this->_helper->layout->disableLayout();
        $this->view->actionTitle = "This is view - index3";
        $this->view->setScriptPath(APPLICATION_PATH."/html/scripts");
    }
    public function index4Action(){
        echo __METHOD__;
        $this->_helper->viewRenderer->setNoRender();
    }
    public function index5Action(){

    }
}
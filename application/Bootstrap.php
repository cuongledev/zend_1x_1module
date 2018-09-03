<?php

Class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{

    protected function _initAutoload(){
        //echo "<br />".__METHOD__;
        $arrayConfig = array(
                'namespace' => '',
                'basePath'  => APPLICATION_PATH
        );
        $autoload = new Zend_Application_Module_Autoloader($arrayConfig);

        return $autoload;
    }
    protected function _initView(){
        $view = new Zend_View();
        $view->headTitle()->append('My application');
        $view->headMeta()->appendHttpEquiv('Content-type','text/html; charset=utf-8');
        return $view;
    }
    protected function _initLayout(){
        $options = array(
            'layoutPath' => LAYOUT_PATH . '/scripts',
            'layout' => 'main',
            'viewSuffix' => 'php'
        );
        Zend_Layout::startMvc($options);
    }
    protected function _initDb(){
        $dbOption = $this->getOption('resources');
        $dbOption = $dbOption['db'];

        $db = Zend_Db::factory($dbOption['adapter'],$dbOption['params']);

        Zend_Registry::set('connectDB',$db);

        Zend_Db_Table::setDefaultAdapter($db);

        /*echo "<pre>";
        print_r($dbOption);*/
    }
    /*protected function _initFrontcontroller(){
        $front = Zend_Controller_Front::getInstance();
        $front->setControllerDirectory(APPLICATION_PATH . "/controllers");
        $front->setDefaultControllerName("Abc");
        return $front;
    }*/
}
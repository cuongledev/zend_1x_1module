<?php
Class LayoutController extends Zend_Controller_Action{

    public function indexAction(){
        $options = array(
            'layoutPath' => LAYOUT_PATH . '/scripts',
            'layout' => 'index',
            'viewSuffix' => 'phtml'
        );
        Zend_Layout::startMvc($options);


    }

    public function mainAction(){
        $options = array(
            'layoutPath' => LAYOUT_PATH . '/scripts',
            'layout' => 'main',
            'viewSuffix' => 'php'
        );
        Zend_Layout::startMvc($options);


    }

    public function changeLayoutAction(){
        $options = array(
            'layoutPath' => LAYOUT_PATH . '/scripts',
            'layout' => 'main',
            'viewSuffix' => 'php'
        );
        Zend_Layout::startMvc($options);


    }
}
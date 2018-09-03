<?php
Class IndexController extends Zend_Controller_Action{

    public function indexAction(){
        echo "<br />" . __METHOD__;
        $model = new Model_Products();
        $model->getItem();

        $test = new Zendlib_Test();
        //echo "<br />";
        $test->hello();


    }
    public function viewAction(){
        echo "<br />" . __METHOD__;
        $form = new Form_User();
        echo "<br />";
        $form->create();
    }
}
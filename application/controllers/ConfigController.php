<?php
Class ConfigController extends Zend_Controller_Action{

    public function indexAction(){
        $filename = CONFIG_PATH . "/db.ini";
        $section = "infomation";
        $config = new Zend_Config_Ini($filename, $section);


        echo "<br/>".$config->webhost;

        echo "<br/>".$config->database->adapter;
        echo "<br/>".$config->database->params->username;

        echo "<br/> <hr />";

        echo "<pre>";
        print_r($config->toArray());


    }
    public function xmlAction(){
        $filename = CONFIG_PATH . "/db.xml";
        $section = "infomation";
        $config  = new Zend_Config_Xml($filename,$section);

        echo "<br/>".$config->webhost;

        echo "<br/>".$config->database->adapter;
        echo "<br/>".$config->database->params->username;

        echo "<br/> <hr />";

        echo "<pre>";
        print_r($config->toArray());

    }

    public function writeIniAction(){

    }
}
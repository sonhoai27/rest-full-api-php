<?php

namespace MVC;

class View {
    private static $instance;
    public $data = array();

    public function __construct() {}

    public static function getInstance() {
        if(!self::$instance){
            self::$instance = new View();
        }

        return self::$instance;
    }

    public function render($name){
        $file = VIEWS.$name.".view.php";
        if(!file_exists($file)){
            throw new Exception("Not found view ".$name);
            return false;
        }
        foreach ($this->data as $key => $value)
        {
            $$key = $value;
        }
        include_once ($file);
    }
}
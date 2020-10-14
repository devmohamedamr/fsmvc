<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database;

class controller {


    public function view($view,$data){
        extract($data);
        require_once(VIEW."/".$view.".php");    
    }

    public function db(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'fs8_proone',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        
        $db = new Database($options);
        return $db;
    }
}
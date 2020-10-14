<?php


namespace MVC\controllers;

use MVC\core\controller;

class homecontroller extends controller{
    public function index(){
      $data =  $this->db()->run("SELECT * FROM user")->fetchAll();
        $this->view('home/index',['d'=>$data]);
    }
}
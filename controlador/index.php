<?php
require_once("modelo/index.php");
//controlador
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    
    static function home(){ 
        require_once("vista/home.php");
    }
   
}
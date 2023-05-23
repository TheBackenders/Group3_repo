<?php
namespace app\controllers;


class BaseController{
    protected $model;

    public function view($v,$p) {
  
        return  require_once(__DIR__.'/../../views/'.$v);
        
    }
   
}

?>
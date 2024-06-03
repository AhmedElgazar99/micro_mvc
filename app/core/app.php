<?php

namespace MVC\core;

class app{
    private $controllers;
    private $method;
    private $params;

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){

            $url= explode( "/",$_SERVER['QUERY_STRING']);
            

            //controllers
            $this->controllers=isset($url[0])?$url[0]."controller":"homecontroller";
            
            //method
            $this->method=isset($url[1])?$url[1]:"index";
            //parameters
            unset($url[0],$url[1]);
            $this->params=array_values($url);
            //print_r($this->params);
        }
        else {
            $this->controllers="homecontroller";
            $this->method="index";
        }

    }

    private function render(){
        $controllers="MVC\controllers\\".$this->controllers;
        if (class_exists($controllers)){
           $controllers=new $controllers; 
            $method=$this->method;
            if (method_exists($controllers,$method)){
                call_user_func_array([$controllers,$method],$this->params);
            }
            else{
                echo "method not exist";
            }
        }
        else {
            echo "class not exist";
        }
    }
}

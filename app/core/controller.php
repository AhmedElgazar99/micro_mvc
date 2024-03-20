<?php

namespace MVC\core;


class controller{
    public function view($path,$param){

        extract($param);
        require_once(VIEW."$path".".php");

    }


}
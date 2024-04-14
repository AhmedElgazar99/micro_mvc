<?php


namespace MVC\controllers;
use MVC\core\Session;
use MVC\core\controller;
use MVC\models\user;


class usercontroller extends controller{


    
    public function index(){
        echo "user";

        $user=user::instane();
        //$user->getalluser();
    }
}

<?php
namespace MVC\models;
use MVC\core\model;
use Rakit\Validation\Rules\Email;

class user extends model{

    public function getalluser(){
        $data=model::db();
       return  $data->row("SELECT * FROM student");
    }

    public function getuser($email,$password){
        $data=model::db();
        return  $data->row("SELECT * FROM student WHERE `email`=? && `password`=?",[$email,$password]);

    }
    public function setuser($name,$email,$password){
        $data=model::db();
        return  $data->insert('student', ['name' => $name, 'email' => $email,'password'=>$password]);
    }
}
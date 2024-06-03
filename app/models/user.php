<?php
namespace MVC\models;
use MVC\core\model;
use Rakit\Validation\Rules\Email;

class user extends model{
    private static $object;
     //++++++++++++++++ singltone++++++++++++++++++++++++
    public  static function instance()
    {

        if (!isset(self::$object)) {
            return self::$object = new user;
        } else {
            return self::$object;
        }
    }

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

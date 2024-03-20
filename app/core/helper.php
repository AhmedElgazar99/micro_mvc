<?php

namespace MVC\core;


class helper{
  public static function redirect($path){
    
    header("location:DOMAIN_NAME".$path);
  }
}
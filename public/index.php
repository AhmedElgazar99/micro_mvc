<?php
require_once('../vendor/autoload.php');

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__) );
define("APP",ROOT.DS."app" );
define("CONFIG",APP.DS."config" );
define("CONTROLLERS", APP.DS."controllers" );
define("CORE",APP.DS."core" );
define("MODEL",APP.DS."model" );
define("VIEW",APP.DS."view" );


//config
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","hr");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://mvc.test/");


use MVC\core\app;
//use MVC\core\controller;

//$g=new controller();
$app=new app();




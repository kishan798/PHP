<?php
require 'core/bootstrap.php';
require 'vendor/autoload.php';
#$router=new Router;
#require 'routes.php';
$uri=trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
$reqMet=$_SERVER['REQUEST_METHOD'];


use App\Core\Router;
use App\Core\Request;



 Router::load('App\routes.php')->direct($uri , $reqMet);


#require 'Task.php';
?> 
<?php
use  App\Core\App;
require 'core/App.php';
App::bind('config', require 'config.php');






require 'core/router.php';

require 'core/database/connections.php';
require 'core/database/querybuilder.php';



App::bind('database', new querybuilder(

connection::make(App::get('config')['database'])
));



function view($name, $data =[])
{
	extract($data);

	return require "App/view/{$name}.php";



}
function redirect($path)
{

	header("Location: /{$path}");




}
<?php

$router->get('Php/index.php/home','PagesController@home');
$router->get('Php/index.php/about','PagesController@about');
$router->get('Php/index.php/contact','PagesController@contact');
$router->post('Php/index.php/names','controller/add-name.php');

$router->get('Php/index.php/users', 'UsersController@index');
$router->post('Php/index.php/users', 'UsersController@store');


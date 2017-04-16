<?php

// $router->define([
// 	'' => 'controllers/index.php',
// 	'about' => 'controllers/about.php',
// 	'about/culture' => 'controllers/about-culture.php',
// 	'contact' => 'controllers/contact.php',
// 	'names' => 'controllers/add-name.php'
// ]);

$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('about/culture','PagesController@aboutCulture');
$router->get('contact','PagesController@contact');
$router->post('users','UsersController@store');
$router->get('users','UsersController@index');

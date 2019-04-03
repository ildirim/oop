<?php
use core\Route;

$route = new Route;

$route->get('', 'HomeController@index');

$route->get($route->url, 'HomeController@error');

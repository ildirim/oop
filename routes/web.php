<?php
use core\Route;

Route::get('', 'HomeController@index');

Route::get(Route::$url, 'ErrorController@index');

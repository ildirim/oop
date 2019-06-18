<?php
use core\Route;

Route::get('', 'HomeController@index');
Route::post('store', 'HomeController@store');

Route::get(Route::$url, 'ErrorController@index');

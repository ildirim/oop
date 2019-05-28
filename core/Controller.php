<?php 
namespace core;

use core\Helpers;
class Controller
{
	public function view($url, $data = null)
	{
		existFile($url);
		require $url . '.php';
	}	
}
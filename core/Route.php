<?php
namespace core;

use core \Helpers;
class Route extends Helpers
{
	public $url;

	public function __construct()
	{
		$this->url = trim($_SERVER['REQUEST_URI'], '/');
	}

	public function route($path)
	{
		$explode = explode('@', $path);
		$controller_name = $explode[0];
		$method_name = $explode[1];
		$controller =  'app\\controllers\\'.$controller_name;
		exist_controller($controller, $controller_name);
		exist_controller_method($controller, $controller_name, $method_name);
		$controller = new $controller;
		return $controller->$method_name();
	}

	public function get($url, $path)
	{
		switch ($this->url) 
		{
			case $url:
				$this->route($path);
				die;
			break;
		}
	}

	public function post()
	{
		$this->route($path);
	}
}
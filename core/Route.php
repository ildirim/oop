<?php
namespace core;

class Route
{
	public static $url;

	public static function getUrl()
	{
		self::$url = trim($_SERVER['REQUEST_URI'], '/');
	}

	public static function get($url, $path) : void
	{
		self::getUrl();
		switch (self::$url) 
		{
			case $url:
				self::route($path);
				die;
			break;
		}
	}

	public function post()
	{
		self::route($path);
	}

	private static function route($path)
	{
		$explode = explode('@', $path);
		$controller_name = $explode[0];
		$method_name = $explode[1];
		$controller =  'app\\controllers\\'.$controller_name;
		existController($controller, $controller_name);
		existControllerMethod($controller, $controller_name, $method_name);
		$controller = new $controller;
		return $controller->$method_name();
	}
}
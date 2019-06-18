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
		self::go('GET', $url, $path);
	}

	public function post($url, $path)
	{
		self::go('POST', $url, $path);
	}

	private static function go($name, $url, $path)
	{
		if($_SERVER['REQUEST_METHOD'] === $name)
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
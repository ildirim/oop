<?php
function existController($controller, $controller_name)
{
	if(!file_exists($controller . '.php'))
	{
		echo $controller_name . " not found!";
		die;
	}	
}

function existControllerMethod($controller, $controller_name, $method_name)
{
	if(!method_exists($controller, $method_name))
	{
		echo $controller_name . '->' . $method_name . " not found!";
		die;
	}
}

function existFile($name)
{
	if(!file_exists($name . '.php'))
	{
		echo "This file is not exist";
		die;
	}
}

function target($controller, $method)
{
	$controller = 'app\\controllers\\' . $controller;
	$controller = new $controller;
	return $controller->$method;
}

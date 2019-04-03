<?php
function exist_controller($controller, $controller_name)
{
	if(!file_exists($controller . '.php'))
	{
		echo $controller_name . " not found!";
		die;
	}	
}

function exist_controller_method($controller, $controller_name, $method_name)
{
	if(!method_exists($controller, $method_name))
	{
		echo $controller_name . '->' . $method_name . " not found!";
		die;
	}
}
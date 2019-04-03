<?php
namespace core;

class Helpers
{
	public function view($url, $data = null)
	{
		require $url . '.php';
	}	
}
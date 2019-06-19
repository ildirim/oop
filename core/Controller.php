<?php 
namespace core;

class Controller
{
	public function view($url, $data = null)
	{
		existFile($url);
		require $url . '.php';
	}

	public function redirect($url, $message)
	{
		session_new('error', $message);
		return header("Location: /" . $url);
	}
}
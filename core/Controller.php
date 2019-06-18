<?php 
namespace core;

class Controller
{
	public function view($url, $data = null)
	{
		existFile($url);
		require $url . '.php';
	}

	public function direct()
	{
		Route::get('', 'HomeController@index');
		var_dump($_SERVER["HTTP_REFERER"]);die;
		if (isset($_SERVER["HTTP_REFERER"]))
	        header("Location: " . $_SERVER["HTTP_REFERER"]);
	}
}
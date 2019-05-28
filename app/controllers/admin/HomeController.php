<?php
namespace app\controllers\admin;

use core\Controller;
use app\models\Category;

class HomeController extends Controller
{
	public function index()
	{
		$data = 'asda';
 		$this->view('resources/backend/index', $data);
	}

	public function test()
	{
		var_dump('expression');
	}

	public function error()
	{
		$this->view('resources/error');
	}
}
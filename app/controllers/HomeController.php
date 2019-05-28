<?php
namespace app\controllers;

use core\Controller;
use app\models\Test;

class HomeController extends Controller
{
	public function index()
	{
		$test = new Test;
		$data = $test->select('name')->where('id', 1)->get();
		$this->view('resources/backend/index', $data);
	}
}
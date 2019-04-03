<?php
namespace app\controllers;

use core\Controller;
use app\models\Category;

class HomeController extends Controller
{
	public function index()
	{
		var_dump(new Category);die();
		$categories = Category::get();
		$this->view('resources/categories/index', $data);
	}

	public function error()
	{
		$this->view('resources/error');
	}
}
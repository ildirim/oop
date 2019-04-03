<?php
namespace app\controllers;

use core\Controller;

class CategoryController extends Controller
{
	public function index()
	{
		$this->view('/resources/index');
	}
}
<?php
namespace app\controllers;

use core\Controller;
use app\models\Test;
use core\Validate;

class HomeController extends Controller
{
	public function index()
	{
		$test = new Test;
		$data = $test->select('name')->where('id', 1)->get();
		$this->view('resources/backend/index', $data);
	}

	public function store()
	{
		$validator = new Validate;
		$rules = ['ad' => 'required|max:3|min:1',
				  'soyad' => 'required|max:4|min:1'];
		$validator->validate($_POST, $rules);
		if($validator->fails())
		{
			$errors = $validator->getErrors();
			$this->redirect('', $errors);
		}
		
		$this->view('resources/backend/index', $data);
	}
}
<?php
namespace app\controllers\admin;

use core\Controller;

class LoginController extends Controller
{
	public function showLogin()
	{
		$this->view('resources/backend/auth/login');
	}

	public function login()
	{
		var_dump($this->validate($_POST));
		die;
		$this->_saveSession();
		$this->view('resources/backend/homeSlider/index');
	}

	private function _saveSession($email)
	{
		$_SESSION["email"] = $email;
	}
}
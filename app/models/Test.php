<?php
namespace app\models;
use core\Model;

class Test extends Model
{
	public function __construct()
	{
		$this->table('test');
	}
}
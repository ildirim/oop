<?php
namespace app\models;
use core\Model;

class Category extends Model
{
	public function __construct()
	{
		$this->table('ada');
	}
}
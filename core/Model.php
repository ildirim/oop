<?php
namespace core;

class Model
{
	private $table;
	public function table($table)
	{
		$this->table = $table;
	}

	public static function get()
	{
		return get();
	}
}
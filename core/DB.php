<?php
namespace core;

use PDO;

class DB
{
	private function __construct() {}
	public static function connection()
	{
		$config = [
			'db' => [
				'name' => 'turbo',
				'host' => 'localhost',
				'user' => 'root',
				'password' => ''
			]
		];

		try
		{
			$pdo = new PDO("mysql:host=" . $config['db']['host'] . ";dbname=" . $config['db']['name'], $config['db']['user'], $config['db']['password']);
			return $pdo;
		} catch(PDOException $e)
		{
			die($e->getMessage());
		}
		
	}
}
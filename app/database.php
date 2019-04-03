<?php

$config = [
	'db' => [
		'name' => 'blogPhp',
		'host' => 'localhost',
		'user' => 'root',
		'password' => ''
	]
];

try
{
	$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['password']);
} catch(PDOException $e)
{
	die($e->getMessage());
}
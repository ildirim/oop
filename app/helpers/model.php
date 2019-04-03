<?php
function where($column, $cmd)
{
	
}

function get()
{
	$sql = "SELECT * FROM " . $this->table;
	$result = $pdo->query($sql)->fetchAll();
	return $result;
}
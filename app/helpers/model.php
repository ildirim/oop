<?php
function select($sql, $cols)
{
	$sql = str_replace('*', $cols, $sql);
	return $sql;
}

function where($sql, $col)
{
	$sql .= " WHERE " . $col . "=?";
	return $sql;
}
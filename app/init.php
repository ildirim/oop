<?php
session_start();
define('URL', realpath('.'));

require URL . '/app/database.php';

foreach(glob(URL . '/app/helpers/*.php') as $helper)
{
	require_once $helper;
}


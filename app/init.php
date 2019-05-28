<?php
session_start();
define('URL', realpath('.'));

use core\DB;
DB::connection();

foreach(glob(URL . '/app/helpers/*.php') as $helper)
{
	require_once $helper;
}
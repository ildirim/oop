<?php

function session_new($key, $value)
{
	$_SESSION[$key] = $value;
}

function get_key($key)
{
	return $_SESSION[$key];
}

function remove_key($key)
{
	unset($_SESSION{$key});
}

function show_message($key)
{
	if($_SESSION[$key])
	{
		echo '<div style="background-color: darkred; border-radius: 5px; border 1px solid red;">';
		foreach(get_key($key) as $error)
		{
			echo '<div>' . $error . '</div>';
		}
		echo '</div>';
		remove_key($key);
	}
}
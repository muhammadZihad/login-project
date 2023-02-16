<?php
	function messageRedirect($type, $msg, $url)
	{
		$_SESSION[$type] = $msg;
		redirect($url);
	}

	function redirect($url)	{
		$base = "Location: http://" . $_SERVER['SERVER_NAME'] . "/rrad/" ;
		// base should be 'Location: http://localhost/rrad/'
		header($base . $url);
	}
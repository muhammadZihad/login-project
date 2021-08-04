<?php
	function messageRedirect($type, $msg, $url)
	{
		$_SESSION[$type] = $msg;
		header("Location: http://localhost/rrad/" . $url);
	}
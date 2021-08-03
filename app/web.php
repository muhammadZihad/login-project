<?php
	require './bootstrap.php';

	use App\Controller\UserController;

	$user = new UserController;
//	$user->register("Hello","efg@mail.com", "password");
//	$user->login("efg@mail.com", "password");

	if (isset($_POST["login"])) {
		if (!isset($_POST["email"])) {
			echo "error";
		}

		if (!isset($_POST["password"])) {
			echo "error2";
		}

		$user->login($_POST["email"], $_POST["password"]);
	}
<?php
	session_start();
	require "./bootstrap.php";
	require "./inc/helper.php";

	use App\Controller\UserController;

	$user = new UserController;

//	Login
	if (isset($_POST["login"])) {
		if (!isset($_POST["email"]) || $_POST["email"] != "" || !isset($_POST["password"]) || $_POST["password"]) {
			messageRedirect("error", "Empty form value", "login.php");
		} else {
			$data = $user->login($_POST["email"], $_POST["password"]);

			if (!$data) {
				messageRedirect("error", "Failed to login", "register.php");
			}
			if (isset($_POST["remember"])) {
				setcookie("user", $data->id, 86400 * 30, "/");
			}
			redirect("");
		}
	}

//	Register
	if (isset($_POST["register"])) {
		if (!isset($_POST["name"]) || $_POST["name"] != "" || !isset($_POST["email"]) || $_POST["email"] != "" || !isset($_POST["password"]) || $_POST["password"]) {
			messageRedirect("error", "Empty form value", "register.php");
		} else {
			$data = $user->register($_POST["name"], $_POST["email"], $_POST["password"]);
			if ($data) {
				messageRedirect("success", "Registration Successful. Please Login", "login.php");
			} else {
				messageRedirect("error", "Failed to register", "register.php");
			}
		}
	}
//	Logout
	if (isset($_POST["logout"])) {
		unset($_COOKIE['user']);
		session_destroy();
		redirect("login.php");
	}



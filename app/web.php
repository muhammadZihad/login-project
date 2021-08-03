<?php
	require './bootstrap.php';

	use App\Controller\UserController;

	$user = new UserController;
	$user->users();

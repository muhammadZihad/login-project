<?php

	namespace App\Controller;

	use App\Database\Database;

	class UserController extends Database
	{

		public function login($email, $password)
		{
			$sql = "SELECT * FROM users WHERE email = ?";
			$statement = $this->connect()->prepare($sql);
			$statement->execute([$email]);
			$user = $statement->fetch();

			if($user && password_verify($password, $user["password"]))	{
				echo "<h2>{$user['name']}</h2>";

			}
		}

		public function register($name, $email, $password)
		{

			$sql = "INSERT INTO users (name, email, password) VALUES (? ,? , ?)";
			$statement = $this->connect()->prepare($sql);
			$statement->execute([$name, $email, password_hash($password, PASSWORD_BCRYPT )]);

		}
	}
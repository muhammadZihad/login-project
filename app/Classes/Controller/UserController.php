<?php

	namespace App\Controller;

	use App\Database\Database;
	use App\Model\User;
	use PDOException;

	class UserController extends Database
	{

		public function login($email, $password)
		{
			try {
				$sql = "SELECT * FROM users WHERE email = ?";
				$statement = $this->connect()->prepare($sql);
				$statement->execute([$email]);
				$user = $statement->fetch();

				if ($user && password_verify($password, $user["password"])) {
					$userModel = new User($user["id"], $user["name"], $user["email"]);
					$_SESSION["user"] = serialize($userModel);
					return $userModel;
				}
			} catch (PDOException $e) {
				return false;
			}
		}

		public function register($name, $email, $password)
		{
			try {
				$sql = "INSERT INTO users (name, email, password) VALUES (? ,? , ?)";
				$statement = $this->connect()->prepare($sql);
				$statement->execute([$name, $email, password_hash($password, PASSWORD_BCRYPT)]);
				return true;
			} catch (PDOException $e) {
				return false;
			}
		}
	}
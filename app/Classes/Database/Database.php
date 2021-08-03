<?php
	namespace App\Database;

	use PDO;
	use PDOException;

	class Database
	{
		private $host;
		private $database;
		private $username;
		private $password;


		public function __construct(){
			$this->host = "localhost";
			$this->database = "rrad";
			$this->username = "root";
			$this->password = "";
		}

		public function connect()	{
			try {
				$connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
				$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				return $connection;
			} catch(PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
			}
			return null;
		}
	}
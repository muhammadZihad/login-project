<?php

	namespace App\Controller;

	use App\Database\Database;

	class UserController extends Database
	{
		public function users()
		{
			$sql = "SELECT * FROM users";
			$statement = $this->connect()->query($sql);
			while ($row = $statement->fetch()) {
				echo $row["name"]."<br>";
			}
		}
	}
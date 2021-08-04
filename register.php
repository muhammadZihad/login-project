<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<title>RRAD User</title>
</head>
<body>
<?php if (! isset($_SESSION["user"]) && !isset($_COOKIE["user"])) { ?>
	<div class="container">
		<div class="parent-box">
			<div class="child-box left-child-box">
				<h1>Already Have an<br>account?</h1>
				<a href="http://localhost/rrad/login.php">Login</a>
			</div>
			<div class="child-box right-child-box">
				<div class="form-container">
					<h1>New Registration</h1>
					<form action="/rrad/app/web.php" method="post">
						<div class="form-element">
							<span>Name</span>
							<input type="text" id="name" name="name" required placeholder="Your Name">
						</div>
						<div class="form-element">
							<span>Email</span>
							<input type="text" id="email" name="email" required placeholder="email@mail.com">
						</div>
						<div class="form-element">
							<span>Password</span>
							<input type="password" id="password" name="password" required placeholder="**********">
						</div>
						<div class="form-submit">
							<input type="submit" name="register" value="Register">
							<a href="http://localhost/rrad/login.php">Have account?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
} else {
	header('Location: http://localhost/rrad/');
}
?>

<script src="./assets/js/app.js"></script>
</body>
</html>
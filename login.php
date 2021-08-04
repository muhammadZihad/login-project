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
                <h1>Don't have an<br>account?</h1>
                <a href="http://localhost/rrad/register.php">Sign Up</a>
            </div>
            <div class="child-box right-child-box">
				<?php
					if(isset($_SESSION["error"]))   {
						echo "<h3 class='error'>{$_SESSION["error"]}</h3>";
						unset($_SESSION["error"]);
					}

					if(isset($_SESSION["success"]))   {
						echo "<h3 class='success'>{$_SESSION["success"]}</h3>";
						unset($_SESSION["success"]);
					}
				?>
                <div class="form-container">
                    <h1>Login to Dashboard</h1>
                    <form action="/rrad/app/web.php" method="post">
                        <div class="form-element">
                            <span>Email</span>
                            <input type="text" id="email" name="email" placeholder="email@mail.com">
                        </div>
                        <div class="form-element">
                            <span>Password</span>
                            <input type="password" id="password" name="password" placeholder="**********">
                        </div>
                        <div class="checkbox">
                            <label class="checkbox-default"><input type="checkbox" name="remember"> <span
                                        class="checkbox-new"></span>Remember Me</label>
                        </div>
                        <div class="form-submit">
                            <input type="submit" name="login" value="Login">
                            <a href="#">Forget Password?</a>
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
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
    <style>
        input{
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-right: 10px;
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION["user"]) || isset($_COOKIE["user"])) { ?>
    <div class="container">
        <form action="/rrad/app/web.php" method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
    </div>
	<?php
} else {
	header('Location: http://localhost/rrad/login.php');
}
?>

<script src="./assets/js/app.js"></script>
</body>
</html>
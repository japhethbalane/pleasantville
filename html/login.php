<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<title>The Pleasantville Theater</title>
	<link rel="icon" href="../images/logo.jpg">
	<link rel="stylesheet" href="../css/login-register.css">
	<link rel="stylesheet" href="../css/login.css">
	<script src="../javascripts/login-notif.js"></script>
</head>
<body>
	<div class="container">
	<center><a href="../html/register.php";">Sign up</a></center>
		<p>Log In</p>
		<form action="../php/login.php" method="post" accept-charset="utf-8">
			<img class="logo" src="../images/logo.jpg">
			<input required type="text" placeholder="Username" name="username">
			<input required type="password" placeholder="Password" name="password">
			<div class="enter-container">
				<input class="enter" type="submit" value="Log in" name="login">
			</div>
		</form>
	<center><a href="../html/index.php">Back to Home</a></center>
	</div>
</body>
</html>
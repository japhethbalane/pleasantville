<?php

	$cookie_name = "loggedin";

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "PleasantVille";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Database connection failed: ".mysqli_connect_error());
	}else{
		echo "Connected to databasse successfully!";
	}

	if (isset($_POST['login'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$phash = sha1(sha1($pass."salt")."salt");

		//phash should be used but errors occur. (modify)
		$sql = "SELECT * FROM users WHERE Username = '$user' AND Password = '$phash'";
		$sql1 = "UPDATE users SET LogIn = 1 WHERE Username = '$user' AND Password = '$phash'";

		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn, $sql1);
		$count = mysqli_num_rows($result);

		if($count == 1){
			$cookie_value = $user;
			setcookie($cookie_name,$cookie_value, time() + (180), "/");
			header("Location: ../php/personal.php");
		}else{;
			header("Location: ../html/login.php");
		}
	}

?>
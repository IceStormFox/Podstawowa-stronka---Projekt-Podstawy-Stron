<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please check your info";
		}
	}


?>

<!doctype html>
<html>
	<head>
		<title>NW - Nightwalker Blog SignUp</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<header>
			<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
			<a href="main.html" class="logo">nw</a>
			<ul>
				<li><a href="main.html">Back</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php" class="active">Singup</a></li>
			</ul>	
		</header>
		<section>
			<img src="stars.png" id="stars">
			<img src="moon.png" id="moon">
			<img src="mountains_behind.png" id="mountains_behind">
			<div class="center">
			<h3>SIGNUP</h3>
				<form method="post">
					<div class="textfield">
						<input type="text" name="user_name" required>
						<span></span>
						<label>Nickname:</label>						
					</div>
					<div class="textfield">
						<input type="password" name="password" required>
						<span></span>
						<label>Password:</label>
					</div>
					<div>
						<input type="submit" value="SINGUP">
					</div>
				</form>
			</div>
			<img src="mountains_front.png" id="mountains_front">
		</section>
	</body>
</html>
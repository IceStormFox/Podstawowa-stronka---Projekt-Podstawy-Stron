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
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo "Please check your info - username or password";
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
		<title>NW - Nightwalker Blog Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<header>
			<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
			<a href="main.html" class="logo">nw</a>
			<ul>
				<li><a href="main.html">Back</a></li>
				<li><a href="login.php" class="active">Login</a></li>
				<li><a href="signup.php">Singup</a></li>
			</ul>	
		</header>
		<section>
			<img src="stars.png" id="stars">
			<img src="moon.png" id="moon">
			<img src="mountains_behind.png" id="mountains_behind">
			<div class="center">
			<h3>LOGIN</h3>
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
						<input type="submit" value="Login">
					</div>
				</form>
			</div>
			<img src="mountains_front.png" id="mountains_front">
		</section>
	</body>
</html>
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!doctype html>
<html>
	<head>
		<title>NW - Nightwalker Blog Welcome</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<header>
			<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
			<a href="main.html" class="logo">nw</a>
			<ul>
				<li><a href="main.html">Back</a></li>
				<li><a href="login.php" class="active">Login</a></li>
			</ul>	
		</header>
		<section>
			<img src="stars.png" id="stars">
			<img src="moon.png" id="moon">
			<img src="mountains_behind.png" id="mountains_behind">
			<div class="center">
			<h3>hello, <?php echo $user_data['user_name']; ?></h3>

			</div>
						<a href="logout.php" class="logout">Logout</a>
			<img src="mountains_front.png" id="mountains_front">
		</section>
	</body>
</html>
<?php
session_start();
$_SESSION['message'] = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$db = mysqli_connect('localhost', 'root', '', 'hospital');

		$query = "SELECT * FROM user WHERE Username = '$user'";
		$result = mysqli_query($db, $query);

		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			$_SESSION['message'] = "No user found";
		}

		else {

			$row = mysqli_fetch_assoc($result);

			$passcheck = password_verify($pass, $row['Password']);

			if ($passcheck == false) {
				$_SESSION['message'] = "No user found";
			}

			else {

				$_SESSION['firstname'] = $row['First_Name'];
				$_SESSION['lastname'] = $row['Last_Name'];
				$_SESSION['email'] = $row['Email'];


				header("Location: Management.php");
			}

		}
	}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link href="Style/style_login.css" type="text/css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300|Open+Sans:310|Source+Sans+Pro:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
</head>


<body>

	<header>
		<div class="container">
			<img class="style-logo" src="Images/Untitled-21.png">
			<nav class="style-nav">
				<ul>
					<li> <a href="index.php">Home</a> </li>
				</ul>
			</nav>
		</div>
	</header>


	<main>

		<div class="Input_screen">
			<div class="cont1">
				<h1>Login</h1>
				<form class="input" action="Login.php" method="POST" enctype="multipart/form-data" autocomplete="off">

					<div class="alert alert-error"><?= $_SESSION['message'] ?></div>

					<input type="text" placeholder="Username" name="user" required /> <br>

					<input type="password" placeholder="Password" name="pass" required /> <br>

					<input type="submit" value="Submit" name="button">

					<div class="f">
						<a href="#">Forgot Password</a>
					</div>
				</form>
			</div>
		</div>


	</main>



	<footer>
		<div class="bottom-container">
			<nav class="nav">
				<ul>
					<li><a href="About.php">About</a></li>
				</ul>
			</nav>


			<div class="copy">
				<h2>&copy;Smart Hospital Management System</h2>
				<p2>All Rights Reserved</p2>
			</div>
		</div>
	</footer>

</body>

</html>

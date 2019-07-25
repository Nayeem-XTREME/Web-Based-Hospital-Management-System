<?php
	session_start();
	$_SESSION['message'] = '';


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  $name1 = $_POST['fname'];
	  $name2 = $_POST['lname'];
	  $desg = $_POST['des'];
	  $username = $_POST['user'];
	  $sex = $_POST['gender'];
	  $mail = $_POST['email'];
	  $pas = $_POST['pass'];
	  $cpas = $_POST['cpass'];
	  $ID = $_POST['id'];
	  $contact = $_POST['cont'];
	  $ad = $_POST['add'];


	  $db = mysqli_connect('localhost', 'root', '', 'hospital');

	  if ($pas == $cpas) {

	    $hashpass = password_hash($pas, PASSWORD_DEFAULT);

	    $query = "INSERT INTO USER (First_Name, Last_Name, Designation, Username, Sex, Email, Password, Contact, Address, ID) VALUES ('$name1', '$name2', '$desg', '$username', '$sex', '$mail', '$hashpass', '$contact', '$ad', '$ID')";
	    $result = mysqli_query($db, $query);

			$_SESSION['firstname'] = $name1;
			$_SESSION['lastname'] = $name2;
			$_SESSION['email'] = $mail;

	    header("Location: Management.php");
	  }

	  else {
			$_SESSION['message'] = "Password does not match!";
	  }
	}
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="Style/style_register.css" type="text/css" rel="stylesheet">

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
				<h1>Register</h1>

				<form class="input" action="Register.php" method="POST" enctype="multipart/form-data" autocomplete="off">

					<div class="alert alert-error"><?= $_SESSION['message'] ?></div>

					<input type="text" placeholder="First Name" name="fname" required />

					<input type="text" placeholder="Last Name" name="lname" required /><br>

					<input type="text" placeholder="Designation" name="des" required />

					<input type="text" placeholder="Username" name="user" required /><br>

					<label for="gender">Sex:</label>

					<input type="radio" value="male" name="gender">Male

					<input type="radio" value="female" name="gender">Female


					<input type="email" placeholder="Email" name="email" required /><br>

					<input type="password" placeholder="Password" name="pass" required />

					<input type="password" placeholder="Confirm Password" name="cpass" required /><br>

					<input type="text" placeholder="ID No." name="id" required />

					<input type="text" placeholder="Contact No." name="cont" required /><br>

					<input type="text" placeholder="Address" name="add" required /><br>

					<input type="text" placeholder="Authentification ID" name="authen" required /><br>

					<input type="submit" value="Submit" name="register"/>

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

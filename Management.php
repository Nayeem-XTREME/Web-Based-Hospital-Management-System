<?php
session_start();
$name1 = $_SESSION['firstname'];
$name2 = $_SESSION['lastname'];
$email = $_SESSION['email'];



?>



<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="Style/style_management.css" type="text/css" rel="stylesheet">

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
					<li> <a href="index.php">Log Out</a> </li>
				</ul>
			</nav>
		</div>
	</header>

	<main>

		<div class="Input_screen">
			<div class="cont1">
				<h1>Name: <?php echo "$name1 $name2" ?></h1>
				<h3>Email: <?php echo $email ?></h3>
			</div>

			<div class="row">
				<div class="col1">

					<div class="box">
						<div class="b"><a href="Add_patient1.php">Add New Patient</a></div>
						<div class="b"><a href="Patient_inf.php">Patients Information</a></div>
						<div class="b"><a href="#">Release Patient</a></div><br><br>

						<div class="b"><a href="#">Add New Doctor</a></div>
						<div class="b"><a href="#">Doctors Information</a></div>
						<div class="b"><a href="#">Remove Doctor</a></div><br><br>

						<div class="b"><a href="#">Add New Nurse</a></div>
						<div class="b"><a href="#">Nurses Information</a></div>
						<div class="b"><a href="#">Remove Nurse</a></div><br><br>

						<div class="b"><a href="#">Staffs Information</a></div>
						<div class="b"><a href="#">Room Information</a></div>
					</div>

				</div>


				<div class="col2">
					<h4>Welcome</h4>

					<h6>Total bed number:</h6>
					<h6>Bed Empty:</h6>
					<h6>Total Doctor:</h6>
					<h6>Total Patient:</h6>
					<h6>Total Nurse:</h6>
					<h6>Current Nurse No.:</h6>

					<img src="Images/Hospital.png" alt="">
				</div>
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

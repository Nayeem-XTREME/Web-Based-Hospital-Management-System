<?php
session_start();
$name1 = $_SESSION['firstname'];
$name2 = $_SESSION['lastname'];
$email = $_SESSION['email'];

if (isset($_POST['register'])) {
	
	$_SESSION['Pname'] = $_POST['name'];
	$_SESSION['Age'] = $_POST['age'];
	$_SESSION['hight'] = $_POST['high'];
	$_SESSION['weight'] = $_POST['wei'];
	$_SESSION['sex'] = $_POST['gender'];
	$_SESSION['bgroup'] = $_POST['blood'];
	$_SESSION['Address1'] = $_POST['p_add'];
	
	$_SESSION['Rela'] = $_POST['c_name'];
	$_SESSION['Relation'] = $_POST['rel'];
	$_SESSION['Address2'] = $_POST['add2'];
	$_SESSION['phone'] = $_POST['phn'];
	$_SESSION['mobile'] = $_POST['mob'];
	$_SESSION['desease'] = $_POST['des'];
	$_SESSION['onset1'] = $_POST['ons'];
	$_SESSION['diagnosis'] = $_POST['diag'];
	$_SESSION['symptom'] = $_POST['sym'];
	$_SESSION['onset2'] = $_POST['ons2'];
	$_SESSION['duration'] = $_POST['dur'];
	$_SESSION['rep_name'] = $_POST['r_name'];
	$_SESSION['r_id'] = $_POST['r_ID'];
	
	header("Location: Add_patient2.php");
	
}

?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="Style/add_patient1.css" type="text/css" rel="stylesheet">

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
					<li><a href="Management.php">Back</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>

		<div class="Input_screen">
			<div class="cont1">
				<h1>Add Patient - 1</h1>

				<form class="input" action="Add_patient1.php" method="POST" enctype="multipart/form-data" autocomplete="off">

					<div class="alert alert-error"> </div>
					
					<label name="ll">Patient Information</label><br><br>
					
					<input class="d" type="text" placeholder="Name" name="name" required />

					<input class="d" type="text" placeholder="Age" name="age" required /><br>

					<div class="ttt">

						<input type="text" placeholder="Hight" name="high" required />

						<input type="text" placeholder="Weight" name="wei" required />

						<label for="gender" name="g">Sex:</label>

						<input type="radio" value="male" name="gender">Male

						<input type="radio" value="female" name="gender">Female

						<label for="blood">Blood Group</label>
						<select name="blood">
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>O+</option>
							<option>O-</option>
							<option>AB+</option>
							<option>AB-</option>
						</select><br>
					</div>

					<input type="text" placeholder="Patient Address" name="p_add" required /><br><br>


					<label name="ll">Contact Information</label><br><br>
					
					<input type="text" placeholder="Relative Name" name="c_name" required />

					<input type="text" placeholder="Relationship with patient" name="rel" required /><br>

					<input type="text" placeholder="Address" name="add2" required /><br>

					<input type="text" placeholder="Phone" name="phn" required />

					<input type="text" placeholder="Mobile" name="mob" required /><br><br>

					<label name="ll">Desease</label><br><br>
					
					<input type="text" placeholder="Desease Name" name="des" required /><br>

					<input type="text" placeholder="Onset date(s)" name="ons" required />

					<input type="text" placeholder="Diagnosis Date(s)" name="diag" required /><br>

					<label name="ll">Symptom</label><br><br>
					
					<input type="text" placeholder="Symptom(s)" name="sym" required /><br>

					<input type="text" placeholder="Onset date(s)" name="ons2" required />

					<input type="text" placeholder="Duration (days)" name="dur" required /><br><br>

					<input type="text" placeholder="Reporter name" name="r_name" required />

					<input type="text" placeholder="Reporter ID" name="r_ID" required /><br><br>

					<input type="submit" value="NEXT" name="register"/>

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

<?php
session_start();

$pname = $_SESSION['Pname'];
$age = $_SESSION['Age'];
$hight = $_SESSION['hight'];
$weight = $_SESSION['weight'];
$sex = $_SESSION['sex'];
$bgroup = $_SESSION['bgroup'];
$add1 = $_SESSION['Address1'];
	
$rname = $_SESSION['Rela'];
$relation = $_SESSION['Relation'];
$add2 = $_SESSION['Address2'];
$phone = $_SESSION['phone'];
$mobile = $_SESSION['mobile'];
$desease = $_SESSION['desease'];
$onset1 = $_SESSION['onset1'];
$diagnosis = $_SESSION['diagnosis'];
$symptom = $_SESSION['symptom'];
$onset2 = $_SESSION['onset2'];
$duration = $_SESSION['duration'];
$rep_name = $_SESSION['rep_name'];
$r_id = $_SESSION['r_id'];

if (isset($_POST['register'])) {
	
	$catagory = $_POST['Catagory'];
	$Room = $_POST['room'];
	$Bed = $_POST['bed'];
	$charge = $_POST['add'];
	$pid = $_POST['p_id'];
	
	
	$db = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$query = "INSERT INTO PATIENT (Name, Age, Sex, Hight, Weight, BloodGroup, Address, Relative, Relation, Address2, Phone, Mobile, Desease, Onset1, Diagnosis, Symptom, Onset2, Duration, Reporter, ID, Catagory, Room, Bed, Charge, PID) VALUES ('$pname', '$age', '$sex', '$hight', '$weight', '$bgroup', '$add1', '$rname', '$relation', '$add2', '$phone', '$mobile', '$desease', '$onset1', '$diagnosis', '$symptom', '$onset2', '$duration', '$rep_name', '$r_id', '$catagory', '$Room', '$Bed', '$charge', '$pid')";
	
	
	$result = mysqli_query($db, $query);
	
	header("Location: Management.php");
	
}

?>



<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="Style/add_patient2.css" type="text/css" rel="stylesheet">

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
					<li><a href="Add_patient1.php">Back</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>

		<div class="Input_screen">
			<div class="cont1">
				<h1>Add Patient - 2</h1>

				<form class="input" action="Add_patient2.php" method="POST" enctype="multipart/form-data" autocomplete="off">

					<div class="alert alert-error"> </div>

					
					<label name="r">ROOM INFORMATION</label><br><br><br>
					
					<label for="Catagory">Catagory:</label>
					<select name="Catagory">
						<option>Normal</option>
						<option>Medium</option>
						<option>VIP</option>
					</select><br>
					
					<input type="text" placeholder="Room No." name="room" required /><br>
					
					<input type="text" placeholder="Bed No." name="bed" required /><br><br>
					
					<input type="text" placeholder="Admission Charge" name="add" required />
					<label>TK</label><br><br><br>
					
					<label name="r">IDENTIFICATION</label><br><br>
					
					<input type="text" placeholder="Patient ID" name="p_id" required /><br><br>

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

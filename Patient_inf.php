<?php
session_start();
$name1 = $_SESSION['firstname'];
$name2 = $_SESSION['lastname'];
$email = $_SESSION['email'];

if (isset($_POST['search'])) {

  $name = $_POST['pname'];
	
    $query = "SELECT * FROM patient WHERE Name LIKE '%".$name."%'";
    
	$search_result = filterTable($query);

}
else {
  $query = "SELECT * FROM patient";
	$search_result = filterTable($query);
  
}

function filterTable($query) {
	$db = mysqli_connect('localhost', 'root', '', 'hospital');
	$result = mysqli_query($db, $query);
	return $result;
	
}

?>



<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	
<!--	<link href="materialize/css/materialize.min.css" type="text/css" rel="stylesheet">-->
	<link href="Style/style_patient_inf.css" type="text/css" rel="stylesheet">

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
					<li> <a href="Management.php">Back</a> </li>
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

					<form class="input" method="POST" enctype="multipart/form-data" autocomplete="off">
						<input type="text" placeholder="Patient Name" name="pname"/>

						<input type="submit" value="Search" name="search"/>
					</form>

					<table class="p_table">
						<tr class="heading">
							<th>Name</th>
							<th>Catagory</th>
							<th>Room No.</th>
							<th>Bed No.</th>
							<th>ID</th>
						</tr>

						<?php while($row = mysqli_fetch_array($search_result)):?>
						<tr>
							<th><?php echo $row['Name'];?></th>
							<th><?php echo $row['Catagory'];?></th>
							<th><?php echo $row['Room'];?></th>
							<th><?php echo $row['Bed'];?></th>
							<th><?php echo $row['PID'];?></th>
						</tr>
						<?php endwhile;?>

					</table>

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

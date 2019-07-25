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

if ($_SERVER['REQUEST_METHOD' == 'POST']) {
	
	$catagory = $_POST['Catagory'];
	$Room = $_POST['room'];
	$Bed = $_POST['bed'];
	$charge = $_POST['add'];
	$pid = $_POST['p_id'];
	
	
	$db = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$query = "INSERT INTO PATIENTS (Name, Age, Sex, Hight, Weight, Blood_Group, Address, Relative, Relationship, Relative_Address, Phone, Mobile, Desease, Onset_Date1, Diagnosis_Date, Symptom, Onset_Date2, Duration, Reporter, Reporter_ID, Room_No, Bed_No, Admission_Charge, Patient_ID) VALUES ('$pname', '$age', '$sex', '$hight', '$weight', '$bgroup', '$add1', '$rname', '$relation', '$add2', '$phone', '$mobile', '$desease', '$onset1', '$diagnosis', '$symptom', '$onset2', '$duration', '$rep_name', '$r_id', '$catagory', '$Room', '$Bed', '$charge', '$pid')";
	
	$result = mysqli_query($db, $query);
	
	header("Location: Management.php");
	
}

?>
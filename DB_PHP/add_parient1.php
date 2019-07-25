<?php
session_start();

if ($_SERVER['REQUEST_METHOD' == 'POST']) {
	
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
<?php
	if ( !isset( $_GET['register-btn'] ) ) header("location: index.php");

	$fname 		= $_GET['firstname'];
	$mname 		= $_GET['middlename'];
	$lname 		= $_GET['lastname'];
	$gender		= $_GET['gender'];
	$bdate 		= $_GET['birthdate'];
	$program 	= $_GET['program'];
	$student 	= $_GET['type'];
	$address 	= $_GET['address'];
?>

<!doctype html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<table>
		<caption><h1>Successfully Registered</h1></caption>
		<tr>
			<td><label>First Name:</label></td>
			<td><small><?= $fname; ?></small></td>
		</tr>
		<tr>
			<td><label>Middle Name:</label></td>
			<td><small><?= $mname; ?></small> </td>
		</tr>
		<tr>
			<td><label>Last Name:</label></td>
			<td><small><?= $lname; ?></small></td>
		</tr>
		<tr>
			<td><label>Gender:</label></td>
			<td><small><?= $gender; ?> </small></td>
		</tr>
		<tr>
			<td><label>Birthday:</label></td>
			<td><small><?= $bdate; ?> </small></td>
		</tr>
		<tr>
			<td><label>Program:</label></td>
			<td><small><?= $program; ?> </small></td>
		</tr>
		<tr>
			<td><label>Student Type:</label></td>
			<td><small><?= $student; ?> </small></td>
		</tr>
		<tr>
			<td><label>Address:</label></td>
			<td><small><?= $address; ?> </small></td>
		</tr>
	</table>
</body>
</html>
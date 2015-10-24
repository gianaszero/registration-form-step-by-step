<?php
	$fname =  $_GET['firstname'];
	$mname = $_GET['middlename'];
	$lname = $_GET['lastname'];
?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="GET" action="step3.php">
		<div id="wrap">			
			<table border="1" cellpadding="6">
				<caption>Student Registration Form</caption>
				<tr>
					<td>First name</td>
					<td>Middle name</td>
					<td>Last name</td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" value="<?php echo $fname;  ?>" readonly /></td>
					<td><input type="text" name="middlename" value="<?php echo $mname; ?>" readonly /></td>
					<td><input type="text" name="lastname" value="<?php echo $lname; ?>" readonly /></td>
				</tr>
				<tr>
					<td colspan="3">
						Gender: <input type="radio" value="Male" name="gender" /> Male
								<input type="radio" value="Female" name="gender" /> Female
					</td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Next" />
		</div>
	</form>
</body>
</html>
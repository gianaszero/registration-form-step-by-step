<?php 
	$fname =  $_GET['firstname'];
	$mname = $_GET['middlename'];
	$lname = $_GET['lastname'];
	$gender = $_GET['gender'];
	$bdate = $_GET['birthdate'] ;
	$program = $_GET['program'];
	$student = $_GET['type'];

	$current_year = date('Y');
 ?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="GET" action="register.php">
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
						Gender: 
						<?php if ( $gender == "Male" ): ?>
							<input type="radio" value="Male" name="gender" checked /> Male
							<input type="radio" value="Female" name="gender" /> Female
						<?php else: ?>
							<input type="radio" value="Male" name="gender" /> Male
							<input type="radio" value="Female" name="gender" checked /> Female
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Birthday:<?php echo $bdate; ?>
						<input type="hidden" value="<?php echo $bdate; ?>" name="birthdate" />
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Program:<?php echo $program; ?>
						<input type="hidden" value="<?php echo $program; ?>" name="program" />
					</td>
				</tr>
				<tr>
					<td colspan="3">Student Type</td>
				</tr>
				<tr>
					<td colspan="3">
						<?php if ( $student == "Full" ): ?>
							<input type="radio" name="type" value = "Full" checked /> Full Scholar <br />
							<input type="radio" name="type" value = "Partial"/> Partial <br />
							<input type="radio" name="type" value = "Payee"/> Payee <br />
						<?php elseif ($student == "Partial"): ?>
							<input type="radio" name="type" value = "Full"  /> Full Scholar <br />
							<input type="radio" name="type" value = "Partial" checked/> Partial <br />
							<input type="radio" name="type" value = "Payee"/> Payee <br />
						<?php else: ?>
							<input type="radio" name="type" value = "Full"  /> Full Scholar <br />
							<input type="radio" name="type" value = "Partial" /> Partial <br />
							<input type="radio" name="type" value = "Payee" checked/> Payee <br />
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td colspan="3">Address:</td>
				</tr>
				<tr>
					<td colspan="3"><textarea name = "address" ></textarea></td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value=" Submit" />
		</div>
	</form>

	<script type="text/javascript" src="date_auto_correct.js"></script>
</body>
</html>
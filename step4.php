<?php 
	$fname =  $_GET['firstname'];
	$mname = $_GET['middlename'];
	$lname = $_GET['lastname'];
	$gender = $_GET['gender'];
	$bdate = $_GET['month'] . "-" . $_GET['day'] . "-" . $_GET['year'];
	
	$courses = ['Bachelor of Science in Information Systems','Bachelor of Science in Social Works',
 				 'Bachelor of Science in Accountancy','Bachelor of Science in Accounting Technology',
 				 'Associate in Computer Technology', 'Bachelor of Arts in Broadcasting','Office Management',
 				 'Mass Communication Technology', 'International Cookery'];

	$current_year = date('Y');
 ?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="GET" action="step5.php">
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
						Program: 
						<select name = "program">
							<option>Courses</option>
							<?php foreach( $courses as $course ): ?>
							<option value ="<?= $course; ?>"><?= $course; ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Next" />
		</div>
	</form>

	<script type="text/javascript" src="date_auto_correct.js"></script>
</body>
</html>
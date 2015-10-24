<?php 
	$fname =  $_GET['firstname'];
	$mname = $_GET['middlename'];
	$lname = $_GET['lastname'];
	$gender = $_GET['gender'];

	$months = ['January', 'February', 'March', 'April',
				'May', 'June', 'July', 'August',
				'September', 'October', 'November', 'December'];
	$current_year = date('Y');
 ?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="GET" action="step4.php">
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
						Birthday:
						<select name="month" id="month" onchange="monthChange();">
							<?php foreach( $months as $key => $month ): ?>
							<option value="<?= $key+1; ?>"><?= $month; ?></option>
							<?php endforeach; ?>
						</select>
						
						<select name="day" id="day">
							<?php for( $day = 1; $day <= 31; $day++ ): ?>
							<option><?= $day; ?></option>
							<?php endfor; ?>
						</select>

						<select name="year" id="year" onchange="yearChange();">
						<?php for( $year = $current_year; $year >= 1980; $year-- ): ?>
							<option><?= $year; ?></option>
						<?php endfor; ?>
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
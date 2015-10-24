<!doctype html>
<html lang="en">
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="GET" action="step2.php">
		<div id="wrap">			
			<table border="1" cellpadding="6">
				<caption>Student Registration Form</caption>
				<tr>
					<td>First name</td>
					<td>Middle name</td>
					<td>Last name</td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder = "eg. Juan" /></td>
					<td><input type="text" name="middlename" placeholder = "eg. Santos"/></td>
					<td><input type="text" name="lastname" placeholder = "eg. Dela Cruz"/></td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Next" />
		</div>
	</form>
</body>
</html>
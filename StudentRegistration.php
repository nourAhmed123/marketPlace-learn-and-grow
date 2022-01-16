<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="Forms.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<form class="modal-content animate" action="ClassRegistration.php" method='post'>
	<h1 style="text-align:center;"><b>Registration Form</b></h1>
	<div class="container">
		Full Name: <input type='text' placeholder="Enter your name" name='Name' required>
		<br><br>
		Email: <input type='text' placeholder="Enter your email" name='Email' required>
		<br><br>
		Password: <input type='password' placeholder="Enter your password" name='Pass' required>
		<br><br>
		ConfirmPassword: <input type='password' placeholder="reenter the password" name='ConfirmPass' required>
		<br><br>
		<input type='radio'  name='ww'  value='student' required>Student
		<input type='radio'  name='ww'  value='instructor' required>Instructor
		<br><br>
		Profile Picture: <input type="file" name="uploadfile" required >
		<br><br>
		<input type='submit' value="Register">
	</form>

</body>
</html>

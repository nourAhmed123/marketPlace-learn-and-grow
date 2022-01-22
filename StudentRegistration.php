<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="Forms.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
.bg{
  background-image: url('laptop-blue-background-pens-notebooks6.jpg');
  background-size: 100% 100%;
  height: 115%;
   background-repeat: no-repeat;


  }
  </style>
<body>
	<div class="bg">
	<form class="modal-content animate" action="ClassRegistration.php" method='post'>
	<h1 style="text-align:center;"><b>Registration Form</b></h1>
	<div class="container">
		<label>Full Name:</label><br>
		 <input type='text' placeholder="Enter your name" name='Name' required>
		<br><br>
		<label>Email:</label><br>
		 <input type='text' placeholder="Enter your email" name='Email' required>
		<br><br>
		<label>Password:</label><br>
		 <input type='password' placeholder="Enter your password" name='Pass' required>
		<br><br>
		<label>ConfirmPassword:</label> <br>
		 <input type='password' placeholder="reenter the password" name='ConfirmPass' required>
		<br>
		<input type='radio'  name='ww'  value='student' required>Student
		<input type='radio'  name='ww'  value='instructor' required>Instructor
		<br><br>
		Profile Picture: <input type="file" name="uploadfile" required >
		<br><br>
		<a href="Login.php">Already Have An Account?</a>
<br>
		
		<input type='submit' value="Register">
	</form>
</div>
</body>
</html>

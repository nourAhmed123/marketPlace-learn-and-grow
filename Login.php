<?php
	include "errorHandling.php";
?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="Forms.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
.bg{
  background-image: url('laptop-blue-background-pens-notebooks6.jpg');
  background-size: cover;
  height: 100%;
 
  
}
  </style>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_and_grow";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['Submit'])){ //check if form was submitted

		$sql="Select * from logininfo where Email ='".$_POST["Email"]."' and Password='".$_POST["Pass"]."'";
			$result = mysqli_query($conn,$sql);

			if($row=mysqli_fetch_array($result))
				{
					$_SESSION["ID"]=$row[0];
					$_SESSION["Email"]=$row["Email"];
					$_SESSION["Password"]=$row["Password"];
					$_SESSION["Name"]=$row["Name"];
					$_SESSION["Role"]=$row["work"];
					if(($row["work"])=='student')
				  {	header("Location:Page2.php");}

				   if(($row["work"])=='instructor'){
					header("Location:InstructorPage.php");
				}
				   if(($row["work"])=='admin')
				{	header("Location:PageAdmin.php");}


			else if($_SESSION["Email"]!=$row["Email"]){
			{
				$_SESSION['error']="invalid";
				header("Location:Login.php");
				return;
			}
	}
}
}  
?> <div class="bg">
	<form class="modal-content" action="" method="post">
		   <div class="login-box">
	<h1 style="text-align:center;"><b>Login</b></h1>
	<div class="container">
	<label>Email:</label><br><br>
	<input type="text" placeholder="enter email" name="Email" required>  <br>
	<label>Password:</label><br><br>
	<input type="Password" placeholder="enter password" name="Pass" required><br>
	<input type="submit" value="Submit" name="Submit">
	<input type="reset">
	</div>
</div>
</form>
</div>
</div>

<?php
	if(isset($_SESSION['error'])){
	echo '<p style="color:red">'.$_SESSION['error']."</p>";
	unset($_SESSION['error']);

}

?>
</html>

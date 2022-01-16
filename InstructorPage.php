<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_and_grow";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['Submit'])){ //check if form was submitted

		$sql="Select NAME from logininfo where Email ='".$_POST["Email"]."' and Password='".$_POST["Pass"]."'";
			$result = mysqli_query($conn,$sql);	
			if($row=mysqli_fetch_array($result))	
				{
					$_SESSION["id"]=$row[0];
					$_SESSION["Email"]=$row["Email"];
					$_SESSION["Password"]=$row["Password"];
					header("Location:Page2.php");

						
				}
			else if($_SESSION["Email"]!=$row["Email"])
			{
				$_SESSION['error']="invalid";
				header("Location:Login.php");
				return;
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: lightblue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: right;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
	<a href="messages.php">Messages</a>
  <a href="courses.php">Insert Courses</a>


  <div class="dropdown">
    <button class="dropbtn"><?= $_SESSION['Name'] ?> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"></a>
      <a href="editemail.php">Change Email</a>
      <a href="editpass.php">Change Password</a>
      <a href="Delete.php">Delete Your Account</a>
      <a href="logout.php">Logout</a>
    </div>
  </div> 
</div>

<img src="Logo.jpg" alt="Logo" height="400" width="500" align="right">

</body>
</html>

<?php
include "StudentRegistration.php";
	 $servername = "localhost";
	  $username = "root";
	  $password = "";
	  $DataBase = "learn_and_grow";

	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$pass=$_POST['Pass'];
	$w=$_POST['ww'];
	$image=$_POST['uploadfile'];
	$filename;


	$email1=filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
	if(!filter_var($email1,FILTER_VALIDATE_EMAIL)===false){
		$Connect = mysqli_connect($servername, $username, $password, $DataBase);
		if (!$Connect)
			{
				echo "connection failed ";
			}

			else{
				echo "connected successfully";
			}

			$i=$_FILES['uploadfile']['Name'];
move_uploaded_file($_FILES["image"]["tmp_name"], "C:\xampp\htdocs\Project1" . $i);
 $sql = "INSERT INTO  logininfo(Name, Email, Password, work, ProfilePic) VALUES ('$name' , '$email' , '$pass' , '$w' ,'$image')";
$result=mysqli_query($Connect,$sql);
    header("Location:login.php");
	}
	else{
	header("StudentRegistration.php");
	echo("This email is not valid");}

		

			



?>

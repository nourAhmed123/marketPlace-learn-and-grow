<?php
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


	$Connect = mysqli_connect($servername, $username, $password, $DataBase);
	if (empty($_POST['Name'])||empty($_POST['Email'])||empty($_POST['Pass'])||empty($_POST['ConfirmPass'])) {
			echo "Please fill missing data";

	}
	if (!empty($_POST['Name'])) {
				$pattern="/^[a-zA-Z0-9_]+$/";
				if (!preg_match($pattern,$name)) {
					echo "Invalid input";
				}
	}
	if ($_POST['Pass']!=$_POST['ConfirmPass']) {
			echo "Password and confirm password should match! Try Again!";

	}

	if (!empty($_POST['Email'])) {
			$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
			if (!preg_match($pattern,$email)) {
				echo"Email not valid, Try Again";
			}

	}




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
if($i==""){
  $i="Logo.jpg";
 $sql = "INSERT INTO  logininfo(Name, Email, Password, work, ProfilePic) VALUES ('$name' , '$email' , '$pass' , '$w' ,'$image')";
}
else $sql = "INSERT INTO  logininfo(Name, Email, Password, work, ProfilePic) VALUES ('$name' , '$email' , '$pass' , '$w' ,'$image')";
$result=mysqli_query($Connect,$sql);
    header("Location:login.php");



?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_and_grow";
session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql="delete from logininfo where ID =".$_SESSION['ID'];
$result=mysqli_query($conn,$sql);
if($result)
{
	session_destroy();
	header("Location:HomePage.php");
}
else
{
	echo $sql;
}

?>

<?php

session_start();
?>
<html>
<head>
    <title>Edit Password</title>
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
    <form class="modal-content animate" action="" method='post'>
    <h1 style="text-align:center;"><b>Change Password</b></h1>
    <div class="container">
<link rel="stylesheet" type="text/css" href="Forms.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<label>Current Password:</label><input type="password" placeholder="enter your password" name="currentPassword" style="width: 50%;"><span id="currentEmail" required></span>
<br><br>
<label>New Password:</label><input type='password' placeholder="enter new password" name="newPassword" style="width: 50%;"><span id="newEmail" required></span>
<br><br>
<label>Confirm Password:</label><input type="password" placeholder="Rewrite new password" name="confirmPassword" style="width: 50%;"><span id="confirmEmail" required></span>
<br><br>
<input type="submit">
</form>
<br>
<br>
<?php
$id = $_SESSION["ID"];/* userid of the user */
$con = mysqli_connect('localhost','root','','learn_and_grow') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT * from logininfo WHERE ID='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["Password"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
mysqli_query($con,"UPDATE logininfo set Password='" . $_POST["newPassword"] . "' WHERE ID='" . $id . "'");
//$message = "Password Changed Sucessfully";
$_SESSION['suc']="Password Changed Sucessfully";
                header("Location:Page2.php");
                return;
} else{
 $message = "Password is not correct";
}
}

    if(isset($_SESSION['suc'])){
    echo '<p style="color:green">'.$_SESSION['suc']."</p>";
    unset($_SESSION['suc']);
}
?>

</body>
</html>
<?php

session_start();
?>
<html>
<head>
    <title>Edit Email</title>
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
    <h1 style="text-align:center;"><b>Change Email</b></h1>
    <div class="container">
<title>Email Change</title>
<link rel="stylesheet" type="text/css" href="Forms.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div><?php if(isset($message)) { echo $message; } ?></div>
<label>Current Email:</label><input type="email" placeholder="enter your email" name="currentEmail" style="width: 50%;"><span id="currentEmail" class="required"></span>
<br><br>
<label>New Email:</label><input type='email' placeholder="enter new email" name="newEmail" style="width: 50%;"><span id="newEmail" class="required"></span>
<br><br>
<label>Confirm Email:</label><input type="email" placeholder="Rewrite new email" name="confirmEmail" style="width: 50%;"><span id="confirmEmail" class="required"></span>
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
if($_POST["currentEmail"] == $row["Email"] && $_POST["newEmail"] == $_POST["confirmEmail"] ) {
                mysqli_query($con,"UPDATE logininfo set Email='" . $_POST["newEmail"] . "' WHERE ID='" . $id . "'");
                //$message = "Email Changed Sucessfully";
                $_SESSION['suc']="Email Changed Sucessfully";
                header("Location:Login.php");
                return;
} 
else{
$_SESSION['error']="Email cannot be changed";}
}

    if(isset($_SESSION['suc'])){
    echo '<p style="color:green">'.$_SESSION['suc']."</p>";
    unset($_SESSION['suc']);
}
else if(isset($_SESSION['error'])){
    echo '<p style="color:red">'.$_SESSION['error']."</p>";
    unset($_SESSION['error']);}
?>

</body>
</html>
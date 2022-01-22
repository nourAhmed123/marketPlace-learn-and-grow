<html>
<head>
    <title>Courses</title>
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
    <form class="modal-content animate" action="AddAdmins.php" method='post'>
    <h1 style="text-align:center;"><b>New Admin Info</b></h1>
    <div class="container">
 <section class="admin_area">
    <div class="container" style="font-size: 15px;">
        <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12">
        Full Name: <input type='text' placeholder="Enter your name" name='Name' required>
        <br><br>
        Email: <input type='text' placeholder="Enter your email" name='Email' required>
        <br><br>
        Password: <input type='password' placeholder="Enter your password" name='Pass' required>
        <br><br>
        ConfirmPassword: <input type='password' placeholder="reenter the password" name='ConfirmPass' required>
        <br><br>
        Type: <input type='text' placeholder="enter the type ex:admin/student or instructor" name='work' required>
        <br><br>
        <input type='submit' value="Register" style=" font-size:15px;">
    </form>

</body>
</html>

 <html>
<head>
    <title>Add A New Admin</title>
    <link rel="stylesheet" type="text/css" href="Forms.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <form class="modal-content animate" action="AddAdmins.php" method='post'>
    <h1 style="text-align:center;"><b>New Admin Info</b></h1>
    <div class="container">
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
        <input type='submit' value="Register">
    </form>

</body>
</html>

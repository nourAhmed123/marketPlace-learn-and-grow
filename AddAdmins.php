 <?php

     $servername = "localhost";
      $username = "root";
      $password = "";
      $DataBase = "learn_and_grow";

    $name1=$_POST['Name'];
    $email1=$_POST['Email'];
    $pass1=$_POST['Pass'];
    $work1=$_POST['work'];

    $Connect = mysqli_connect($servername, $username, $password, $DataBase);

        if (empty($_POST['Name'])||empty($_POST['Email'])||empty($_POST['Pass'])||empty($_POST['ConfirmPass']) ||empty($_POST['work'])) {
            echo "Please fill missing data";

    }
    if (!empty($_POST['Name'])) {
                $pattern="/^[a-zA-Z0-9_]+$/";
                if (!preg_match($pattern,$name1)) {
                    echo "Invalid input";
                }
    }
    if ($_POST['Pass']!=$_POST['ConfirmPass']) {
            echo "Password and confirm password should match! Try Again!";

    }

    if (!empty($_POST['Email'])) {
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
            if (!preg_match($pattern,$email1)) {
                echo"Email not valid, Try Again";
            }

    }

         $sql = "INSERT INTO  logininfo(Name, Email, Password, work) VALUES ('$name1' , '$email1' , '$pass1', '$work1')";
        $result=mysqli_query($Connect,$sql);
        header("Location:AllAdmins.php");



?>


<?php
     session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_and_grow";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die('ERROR');
        if(isset($_GET['course_id'])){
            $id=$_GET['course_id'];
              $result = mysqli_query($conn,"Select * FROM courses WHERE CourseId ='".$id."';");
              $row=mysqli_fetch_array($result);
                $approved = $row['Accepted'];
            if($approved==0){ 
                $acc=1;
                mysqli_query($conn,"UPDATE courses set Accepted='" . $acc . "' WHERE CourseId='" . $id . "'");
                 echo "<script>alert('Course Approved!!')</script>";
                echo "<script>window.open('ShowCourses.php','_self');</script>";
            }
            else{
                    echo "<script>alert('Course Already Approved!!')</script>";
                    echo "<script>window.open('ShowCourses.php','_self');</script>";
            }




    }



?>

</body>
</html>

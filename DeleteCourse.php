<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_and_grow";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die('ERROR');
		if(isset($_GET['del_course'])){
			    $delete_course_id = $_GET['del_course'];
				$sql="delete from courses where CourseId ='".$delete_course_id."'";
				$result = mysqli_query($conn,$sql);
				    echo "<script>alert('Course Deleted Successfully!!')</script>";
				    echo "<script>window.open('ShowCourses.php','_self');</script>";
				}
?>

</body>
</html>

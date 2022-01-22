<html>
<head>
	<title>Surveying a course</title>
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
	<form class="modal-content" action="" method="post">
		   <div class="login-box">
	<h1 style="text-align:center;"><b>Survey</b></h1>
	Enter Course Name:<input style="font-size: 22px;" type="text" name="Name" required>
	<h2 style="text-align:center; font-size: 17px;"><b>Pleae indicate your level of agreement with the following statments</b>
		<br><br>
	<div  style="font-size: 15px;" class="container">
	<label >Course Objective were clear: </label>
	1  <input type="radio" value="1" name="clear" required>
	2  <input type="radio" value="2" name="clear" required> 
	3  <input type="radio" value="3" name="clear" required>
	4  <input type="radio" value="4" name="clear" required>
	5  <input type="radio" value="5" name="clear" required>
	<br><br>
	<label style="font-size: 15px;">The File was written clearly: </label>
	1  <input type="radio" value="1" name="written"  required>
	2  <input type="radio" value="2" name="written"  required> 
	3  <input type="radio" value="3" name="written"  required>
	4  <input type="radio" value="4" name="written"  required>
	5  <input type="radio" value="5" name="written"  required>
	<br><br>
	<label style="font-size: 15px;">The course increased my intrest in the subject: </label>
	1  <input type="radio" value="1" name="intrest" required>
	2  <input type="radio" value="2" name="intrest" required> 
	3  <input type="radio" value="3" name="intrest" required>
	4  <input type="radio" value="4" name="intrest" required>
	5  <input type="radio" value="5" name="intrest" required>
	<br><br>
	<label style="font-size: 15px;">The video was useful: </label>
	1  <input type="radio" value="1" name="useful" required>
	2  <input type="radio" value="2" name="useful" required> 
	3  <input type="radio" value="3" name="useful" required>
	4  <input type="radio" value="4" name="useful" required>
	5  <input type="radio" value="5" name="useful" required>
	<br><br>
	<label style="font-size: 15px;">Total Rating for course:</label>
	 <input type="Rating" placeholder="Enter rating from 1 to 5" name="rate1" required>
	 <br><br>
	 Do you have any comment? <input type="text" placeholder="Comment" name="comment" style="width: 30%;">
	<br>
	<input type="submit" value="Submit" name="Submit" style="
    margin: 18px 100px;">
	</div>
</div>
</form>
</div>
</div>
</body>
<?php 
 

	$name=$_POST['Name'];
	$clearness=$_POST['clear'];
	$file=$_POST['written'];
	$int=$_POST['intrest'];
	$usefulness=$_POST['useful'];
	$rate=$_POST['rate1'];
	$comment=$_POST['comment'];

$con = mysqli_connect('localhost','root','','learn_and_grow') or die('Error');


if(isset($_POST['Submit']))
{	 
	$result = mysqli_query($con,"SELECT * FROM courses where CourseName='".$name."'");
	$row=mysqli_fetch_array($result);

	if($name==$row['CourseName']){
		$sql = "INSERT INTO  survey(CourseName, clearance, FileEfficiency, Interest, Usefulness, Rating, Comment) VALUES ('$name' , '$clearness' , '$file' , '$int' ,'$usefulness','$rate','$comment')";
		$result=mysqli_query($con,$sql);
		 echo "<script>alert('Review inserted Successfully!!')</script>";
	     echo "<script>window.open('Page2.php','_self');</script>";

	}
	else{
		 echo "<script>alert('Enter a valid course name!!')</script>";
	}

}

?>

</html>
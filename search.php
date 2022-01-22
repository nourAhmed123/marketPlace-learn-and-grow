<html>
  <head>
  <style>
  table,td,th,tr {vertical-align: center;
  position:relative;
  text-align:center;
  }
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #DFFFCE;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

  </style>
</head>
<table id="customers" style="border:2px solid black; width: 100%; height: 30%;">
                        <thead>
                          <tr>
                            <th>Course Id</th>
                            <th>Course Name</th>
                            <th>Course Desc</th>
                            <th>Video Link</th>
                            <th>Course Image</th>
                            <th>Course Content</th>
                            <th>Course Price</th>
                            <th>Add to cart</th>
                          </tr>
<?php
if(isset($_GET['search']))
{
$key=$_GET["search"];  //key=pattern to be searched
$con=mysqli_connect('localhost','root','','learn_and_grow') or die('Error');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result=mysqli_query($con,"select * from courses where `CourseName` like '%$key%'"); 
                    
                        while($user_row = mysqli_fetch_array($result)):
                        $id = $user_row ['CourseId'];
                        $name = $user_row ['CourseName'];
                        $desc = $user_row ['CourseDesc'];
                        $video = $user_row ['VideoLink'];
                        $_SESSION['course_img_'] = $user_row ['CourseImage'];
                        $content = $user_row ['CourseContent'];
                        $price = $user_row ['CoursePrice'];

                        ?>
                          <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $desc;?></td>
                            <td><?php echo "<a href='".$video."'>video link</a>"?></td>
                            <td><?php echo "<img src='".$_SESSION['course_img_']."'width=300>"?></td>
                            <td><?php echo "<a href='".$content."'>File</a>"?></td>
                            <td><?php echo $price;?></td>
                            <td><a href="index.php?id_course=<?php echo $id;?>">Add to cart</a></td>


                          </tr>
                        <?php endwhile;
                    } 
else {
  echo "0 results";
}



?>
</table>
</html>
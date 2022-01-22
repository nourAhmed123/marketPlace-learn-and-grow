<?php
    session_start();
 ?>

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
  <body>

<section class="admin_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   <h2>View All Courses</h2>
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
                            <th>Aprove</th>
                            <th>Edit</th>
                            <th>Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $user = "select * from courses";
                        $con = mysqli_connect('localhost','root','','learn_and_grow') or die('Error');
                        $run_user = mysqli_query($con,$user);
                        while($user_row = mysqli_fetch_array($run_user)):
                        $id = $user_row ['CourseId'];
                        $name = $user_row ['CourseName'];
                        $desc = $user_row ['CourseDesc'];
                        $video = $user_row ['VideoLink'];
                        $content= $user_row ['CourseContent'];
                        $_SESSION['course_img_'] = $user_row ['CourseImage'];
                        $price = $user_row ['CoursePrice'];
                        $approve=$user_row['Accepted'];

                        ?>
                          <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $desc;?></td>
                            <td><?php echo "<a href='".$video."'>video link</a>"?></td>
                            <td><?php echo "<img src='".$_SESSION['course_img_']."'width=300>"?></td>
                            <td><?php echo "<a href='".$content."'>File</a>"?></td>
                            <td><?php echo $price;?></td>
                            <td><a href="Approving.php?course_id=<?php echo $id;?>">Approve</a></td>
                            <td><a href="EditCourses.php?del_course=<?php echo $id;?>">Edit</a></td>
                            <td><a href="DeleteCourse.php?del_course=<?php echo $id;?>">Delete</a></td>


                          </tr>
                        <?php endwhile;?>
                        </tbody>
                      </table>
                      <br><br>
                      <button><a href="courses.php">Add A new Course</a></button>
                      <br>
                </div>
            </div>
        </div>
    </div>
    <
</section>

                        </body>
                        </html>

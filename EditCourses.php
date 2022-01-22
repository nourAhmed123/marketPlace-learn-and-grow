<?php
session_start();
$con = mysqli_connect('localhost','root','','learn_and_grow') or die('Error');
  $Courseid=$_SESSION['CourseID'];
          $post_title = $_POST['course_title'];
          $course_desc= $_POST['course_desc'];
          $course_content = $_FILES['course_content']['name'];
          $course_content_tmp = $_FILES['course_content']['tmp_name'];
          $course_video = mysqli_real_escape_string ($con,$_POST['course_video']);
          $post_featured_image = $_FILES['post_featured_image']['name'];
          $post_featured_image_tmp = $_FILES['post_featured_image']['tmp_name'];
          move_uploaded_file($post_featured_image_tmp,"images/$post_featured_image");
           move_uploaded_file($course_content_tmp,"images/$course_content");

  $sql= "UPDATE `courses` SET `CourseName`='".$post_title."',`CourseDesc`='".$course_desc."',`CourseContent`='".$course_content."',`CourseVideo`='".$course_video."',`CourseImage`='".$post_featured_image."'WHERE CourseId ='".$Courseid."'";
            $result=mysqli_query($conn,$sql);
            if($result){
              header("Location:courss.php")
            }

            ?>

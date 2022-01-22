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
    <form class="modal-content animate" action="ClassRegistration.php" method='post'>
        <h1 style="text-align:center;"><b>Insert New Course</b></h1>
    <div class="container">
 <section class="admin_area">
    <div class="container" style="font-size: 15px;">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="add_admin_content">
                   
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
                        <p>
                            <label for="course_title">Course Title</label>
                            <input type="text" placeholder="Course title" name="course_title" >
                        </p>
                        <p>
                            <label  for="course_desc">Course Description</label>
                            <br>
                            <textarea name="course_desc" style="height: 20%; width: 30%;" cols="30" rows="10" ></textarea>
                        </p>
                        <p>
                            <label for="course_content">Course Content File</label>
                            <input type="file" value="Enter Folder Link" name="course_content" >
                        </p>
                        <p>
                            <label for="course_video">Course Youtube Link</label>
                            <input type="url" placeholder="Enter Youtube Video Link" name="course_video" >
                        </p>
                        <p>
                            <label for="post_featured_image">Course Image</label>
                            <input type="file" value="Course Featured Image" name="post_featured_image">
                        </p>
                        <p>
                            <label for="course_categories">Course Category</label>
                            <select name="course_categories" id="select_cat">
                                <option value="Select a category">Select a category</option>
                                <option value="English101">English101</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Physics">Physics</option>
                            </select>
                        </p>
                        <p>
                            <label for="course_price">Course Price</label>
                            <input type="text" placeholder="Course Price in LE" name="course_price">
                        </p>
                          <p>
                            <input type="submit" value="Publish" name="publish_post">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

/*
Insert Query
*/
 $con = mysqli_connect('localhost','root','','learn_and_grow') or die('Error');

if(isset($_POST['publish_post'])){
$post_title = $_POST['course_title'];
$course_desc= $_POST['course_desc'];
$course_content = $_FILES['course_content']['name'];
$post_course_tmp = $_FILES['course_content']['tmp_name'];
$course_video = mysqli_real_escape_string ($con,$_POST['course_video']);
$post_featured_image = $_FILES['post_featured_image']['name'];
$post_featured_image_tmp = $_FILES['post_featured_image']['tmp_name'];
$post_categories = $_POST['course_categories'];
$post_price=$_POST['course_price'];
    if($post_title == '' OR $post_featured_image == '' OR $post_categories == '' OR $course_video == '' OR $post_price == ''){
    echo "<script>alert('Please Fill All The Fields')</script>";
        exit();
    }
    else{
    move_uploaded_file($post_featured_image_tmp,"images/$post_featured_image");
     move_uploaded_file($post_content_tmp,"images/$post_content");

    $insert_post = "insert into courses (CourseId,CourseName,CourseDesc,CourseImage,CourseContent,VideoLink, CoursePrice) values ('$post_categories','$post_title','$course_desc','$post_featured_image','$course_content','$course_video', '$post_price')";
    $run_query = mysqli_query($con,$insert_post);
        if($run_query){
            echo "<script>alert('Course Published Successfully!!')</script>";
            echo "<script>window.open('PageAdmin.php','_self');</script>";
        }
    }
}
?>
</body>
</html>

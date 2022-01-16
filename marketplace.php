<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_and_grow";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT CourseName, CourseDesc, CourseImage FROM COURSES;";
      $result = mysqli_query($conn,$sql); 

      $cacheArray = array(); // Used to store the information to be used below
      $i=0;
      $cnames = array();
      $cdescs = array();
      $cimgs = array();
      while ($row = $result->fetch_array(MYSQLI_ASSOC)){
          $_SESSION['course_name_'.$i] = $row['CourseName'];
          $_SESSION['course_desc_'.$i] = $row['CourseDesc'];
          $_SESSION['course_img_'.$i] = $row['CourseImage'];

          $coursenamesarr[] = $row['CourseName'];
          $coursedescarr[] = $row['CourseDesc'];
          $courseimgarr[] = $row['CourseImage'];


          $cnames[] = Array($row['CourseName']);
          $cdescs[] = Array($row['CourseDesc']);
          $cimgs[] = Array($row['CourseImage']);


          $i = $i+1;
      }

      $_SESSION['coursesnames'] = $cnames;
      $_SESSION['coursesdescs'] = $cdescs;
      $_SESSION['coursesimgs'] = $cimgs;

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: lightblue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: right;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<script>
  function createCookie(name, value, days) 
  {
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  else {
    expires = "";
  }
  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
  }


  let AddToCart = (x) => {

  }


window.onload = function() {
  fillData();
};
    let fillData = () => {
        let ele = document.getElementById('container');
        var c_names = <?php echo json_encode($cnames); ?>;
        var c_descs = <?php echo json_encode($cdescs); ?>;
        var c_imgs = <?php echo json_encode($cimgs); ?>;
        var c_total = <?php echo count($cnames); ?>;

        for (let i = 0; i < c_total; i++)
        {
          ele.innerHTML += "<div class='card' style='width:250px'><img class='card-img-top' width=50 height=100 src='" + c_imgs[i] + "' alt='Invalid image'><div class='card-body'><h4 class='card-title'>" + c_names[i] + "</h4><p class='card-text'>" + c_descs[i] + "</p><a href='#' class='btn btn-primary' onClick='AddToCart(" + i + ")''>Add to Cart</a></div></div>";
        }



        

;
    }
</script>

</head>
<body>

<div class="navbar"
>	<a href="Messages.php">Messages</a>
  <a href="AllAdmins.php">All Admins </a>
  <a href="AllLearners.php">All Learners </a>
  <a href="courses.php">Insert Courses</a>
  <a href="marketplace.php">Marketplace</a>


  <div class="dropdown">
    <button class="dropbtn"><?= $_SESSION['Name'] ?> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="editemail.php">Change Email</a>
      <a href="editpass.php">Change Password</a>
      <a href="Delete.php">Delete Your Account</a>
      <a href="DeleteOthers.php">Delete Other Accounts</a> 
      <a href="logout.php">Logout</a>
    </div>
  </div> 


</div>



<img src="Logo.jpg" alt="Logo" height="400" width="500" align="right">




<div id='container'></div>
<div id='demo'></div>



</body>
</html>

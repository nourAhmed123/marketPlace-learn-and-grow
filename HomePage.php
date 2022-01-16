<html>
<head>
	<title>
	Home Page
	</title>
	<link rel="stylesheet" type="text/css" href="Forms.css">
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>body {font-family: "Lato", sans-serif}
.mySlides {display: none}<
h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}</style>
<body>
	<div class="topnav">
		<a href="contactUs.html">Contact Us</a>
		<a href="about.html">about Us</a>
		<a href="StudentRegistration.php">Create an account?</a>
		<a href="Login.php">Login</a>
		<img src="flower.PNG" alt="Logo" height="70" width="90" align="left">
		<h1 style="text-align:left; margin-left:10px; margin-top:8px; color: lightblue; "><b>Learn And Grow</b></h1>
		<input type="text" placeholder="Search.." style="width: 400px; margin-left: 400px; margin-top: -50px;">
	</div>

<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img id ="contactUs.html"src="Choosing-an-Oxford-course.jpg" height="500" width="800">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div> <h3>Learn</h3>
      <p><b>Explore any interest or trending topic, take prerequisites, and advance your skills</b></p>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="og-image.png" height="500" width="800"">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">


    </div> <h3>Certificates</h3>  <p><b>Earn a certificate for every learning program that you complete at no additional cost</b></p>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="5tipsc-1024x576.jpg" height="500" width="800">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

    </div> <h3>Flexibility</h3>
      <p><b>Learn at your own pace, move between multiple courses, or switch to a different course</b></p>
  </div><img src="Logo.jpg" alt="Logo" height="300" width="400" align="right">
  <div class="w3-padding-32">
      <h4><b>Why US?</b></h4>
      <h6><i>Work hard,Stay consistent,and be patient!</i></h6>
      <p>Enroll in Learn and grow today and, for as few as 10 hours a week, you can get the in-demand skills you need to help land a high-paying tech job. Learn at your own pace, when and where it’s convenient Your learning experience is grounded in cutting edge cognitive science. With more than two dozen distinct learning features to help you achieve your goals, our approach follows three key principles:
Experience
Learn new knowledge and skills in a variety of ways, from engaging video lectures and dynamic graphics to data visualizations and interactive elements.
Practice
Demonstrating your knowledge is a critical part of learning. learn and grow courses and programs provide a space to practice with quizzes, open response assessments, virtual environments, and more.
Apply
Learning on learn and grow transforms how you think and what you can do, and translates directly into the real world—immediately apply your new capabilities in the context of your job.for you.</p>

    </div>
  </div>
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>

    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Worldwide<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 123456<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: learnAndgrow@mail.com<br>
      </div>
</div>


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}

</script>
</body>
</html>

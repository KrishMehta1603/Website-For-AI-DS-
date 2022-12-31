<?php 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="with=device-width, intial-scale=1.0">
<title>Chemical Department - About Us</title>
<link rel="shortcut icon" type="image/png" href="images\212.png">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<section class="staffheader">
<nav>
<a herf="login.html"><img src="images/logo.png"></a>
<div class="nav-links">
<ul>
<li><a href="user.php">HOME</a></li>
<li><a href="aboutus.php">ABOUT</a></li>
<li><a href="courses.php">COURSE</a></li>
<li><a href="">STAFF</a></li>
<li><a href="student.php">STUDENTS</a></li>
<li><a href="gallery.php">GALLERY</a></li>
</ul>
</ul>
</div>
</nav>
<div class="text-box2">
<h2>Staff</h2>
<p>Chemical Department<br>Shri Bhagubhai Mafatlal Polytechnic</p>
</div>

<script>
var i = 0; // Start Point
var images = []; // Images Array
var time = 3000; // Time Between Switch

// Image List
images[0] = "images/1.png";
images[1] = "images/2.png";
images[2] = "images/3.png";
images[3] = "images/4.png";
images[4] = "images/5.png";



// Change Image
function changeImg(){
document.slide.src = images[i];



// Check If Index Is Under Max
if(i < images.length - 1){
// Add 1 to Index
i++;
} else {
// Reset Back To O
i = 0;
}



// Run function every x seconds
setTimeout("changeImg()", time);
}



// Run function when page loads
window.onload=changeImg;
</script>
<center>
<div class="imgs">
<img name="slide" width="800" height="400">
</div>
</center>



<div class="foot1">
  <h1>About Us</h1>
  <p>The Diploma course in chemical engineering deals with various aspects of chemical industry, such as, Unit operations,Process Technology of Important Commercial Chemicals,<br> Process Control and Instrumentation,Maintenance and Material Handling.The course covers, important subjects such as, Mass Transfer, Heat Transfer,Pollution Control and Waste Disposal,<br> Stoichiometryand Safety in Plant Operation.<br>
    The students undergoing this course get well conversant with the plant operation and maintenance of modern chemical plant.They can work in industry as foremen, supervisors at the shop floor level.<br> They can also work for fabrication,erection and commissioning of plants.</p>
</div>



</section>

</body>
</html>


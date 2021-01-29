
<?php

include("auth.php"); 




//include auth.php file on all secure pages ?>



<!DOCTYPE html>
<html>
<title>Welcome</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/wel.css">

<body style=" background: linear-gradient(to top right, #ccff99 29%, #ccccff 76%);">

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme"> Shortcut Menu </h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  
  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="aboutus.php" class="w3-bar-item w3-button">About us</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
  <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
    
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 

  <div class="w3-center">


  <h4 id="demo"><img src="css/bat.png" width="200" height="150"; style="float: left;">
<button onclick="typeWriter()">Find My Name</button>
<p id="demo" ></p>


   </h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"> Cricket Database !!</h1>
   
  </div>
</header>



<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">

 
  <a href="teams.php"> <img src="css/team.png" width=300px; height=200px >
  </a>
  <h3> Teams </h3>

  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
 
  <a href="coach.php"><img src="css/coach2.png" width="200px;" height="200px"></a>
  
  <h3>Coach <h3>
 

  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  
 <a href="ranking.php"> <img src="css/rank.png" width="200px;" height="200px"></a>
  <h3>Rankings</h3><br>
  
  
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  
 <a href="viewfix.php"> <img src="css/fixt.png" width="200px;" height="200px"></a>
  <h3>Fixtures</h3><br>
  
  
  </div>
</div>


<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  
 <a href="toprunsscored.php"> <img src="css/bat.png" width="200px;" height="180px" ></a>
  <h3>Top Most Runs Scorers</h3><br>
  
  
  </div>
</div>


<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  
 <a href="topwickets.php"> <img src="css/bowl4.png" width="200px;" height="180px" ></a>
  <h3>Top Wickets Takers</h3><br>
  
  
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  
 <a href="topplayers.php"> <img src="css/bowl4.png" width="200px;" height="180px" ></a>
  <h3>Top Players</h3><br>
  
  
  </div>



</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  
 <a href="iccrank/usericcrank.php"> <img src="css/icc.png" width="400px;" height="180px" ></a>
  <h3>ICC MEN RANKING</h3><br>
  
  
  </div>


</div>

<div class="w3-container">
<hr>
<div class="w3-center">
  <h2>Coming soon </h2>
</div>


<div class="w3-row w3-border">
  <div class="w3-half w3-container w3-blue w3-border">
    <h5>w3-half</h5>  
    
  </div>
  <div class="w3-half w3-container">
    <h5>w3-half</h5>  
  </div>
</div>
<br>


 
     



<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
 <center> <h3>Footer</h3></center>

  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>

</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>



<script>
var i = 0;
var txt = "Welcome ---> <?php echo $_SESSION['username']; ?> <---";
var speed = 70;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

</body>
</html>


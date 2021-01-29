
<?php
$db = mysqli_connect('localhost', 'root', '', 'fix'); 



?>

<!DOCTYPE html>
<html>
<head>
    <title>Recents</title>
    <link rel="stylesheet" type="text/css" href="css/crud.css">
   
    <link rel="stylesheet" type="text/css" href="css/wel.css">
</head>



<!--Menu Welcome-->


<body style=" background: linear-gradient(to top right, #ccff99 29%, #ccccff 76%);">

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme"> Shortcut Menu </h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  
  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="welcome.php" class="w3-bar-item w3-button">Welcome Menu</a>
  <a href="aboutus.php" class="w3-bar-item w3-button">About us</a>

  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
  <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
     <a href="search.php" class="w3-bar-item w3-button">Search</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 

  <div class="w3-center">


  <h4 id="demo"><img src="../css/fixt.png" width="200" height="150"; style="float: left;">
<button onclick="typeWriter()">Find My name</button>
<p id="demo" ></p>


   </h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"> Recents / History !!</h1>
   
  </div>
</header>



<?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>




<?php $results = mysqli_query($db, "SELECT * FROM history order by id desc"); ?>

<table>
    <thead>
        <tr>
            <th>Date Scheduled</th>
            <th>Format</th>
            <th>Team 1</th>
            <th>Team 2</th>
            <th>Location</th>
          
       
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
             <td><?php echo $row['date']; ?></td>
          <center><td><?php echo $row['typ']; ?></td></center>
            <center><td><?php echo $row['teamone']; ?></td></center>
            <td><?php echo $row['teamtwo']; ?></td>
             <td><?php echo $row['loc']; ?></td>
          
           
        </tr>
    <?php } ?>
</table>









<!--form-->


  


   




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

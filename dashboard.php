<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>


<div class="navbar">
<img src="css/bat4.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{Cricket. Database.} </h1>

 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>

 
  <a href="welcome.php"><center><img src="css/log.png" width="40" height="50"></center>Welcome <?php echo $_SESSION['username']; ?></a>
  <center><a href="adminlogin.php"><img src="css/reg.png" width="40" height="60"></center>Admin Login</a>
  <a href="registration.php"><img src="css/reg.png" width="40" height="60">Register</a>
 <a href="Home.php"><img src="css/house.png" width="40" height="50">Home</a>

<h1>	Thankyou <?php echo $_SESSION['username']; ?> </h1> 

  </div>


</body>
</html>

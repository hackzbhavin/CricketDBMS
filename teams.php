

<?php

include("auth.php"); 




//include auth.php file on all secure pages ?>


<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<title>Teams</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/teams.css">

</head>
<body style="  background: linear-gradient(to bottom right, #ffcc99 43%, #66ffff 92%);">
<div class="navbar">
<img src="css/bat4.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{Teams. Database.} </h1>

 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>


 
 <a style="color: red" href="welcome.php"><img src="css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>

  </div>




<div class="form">
  
	
<center>
  <h2>
    <img  src="css/wc.png" width=100px height=100px>

 Qualified Teams</h2></center>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>India</h2>
    <a href="india.php">
    <img src="css/logoind.png" alt="India"></a>
   
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>England</h2>
    <a href="eng.php">
    <img src="css/eng5.png" alt="India" width=200px height=250px></a>

  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Australia</h2>
    <a href="aus.php">
     <img src="css/logoaus.png" alt="India"></a>
  
  </div>
  <div class="column" style="background-color:#ddd;">

    <h2>New Zealand</h2>
    <a href="nz.php">
     <img src="css/logonz.png" alt="India"></a>

  </div>
</div>





<div class="form">
  
  
<center>
  <h2>
    <img  src="css/wc.png" width=100px height=100px>

 Unqualified Teams</h2></center>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Pakistan</h2>
    <a href="pk.php">
    <img src="css/logopk.png" alt="India"></a>
   
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>WestIndies</h2>
    <a href="wi.php">
    <img src="css/logowi.png" alt="India" width=400px height=450px></a>

  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Sri Lanka</h2>
    <center><a href="sl.php">
     <img style="padding: 40px" src="css/logosri.png" alt="India"></a>
  </center>
  </div>
  <div class="column" style="background-color:#ddd;">

    <h2>Bangladesh</h2>
    <a href="bd.php">
     <img src="css/logobg.png" alt="India"></a>

  </div>
</div>

<div class="form">
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Afghanistan</h2>
    <a href="afg.php">
    <img src="css/logoafg.png" alt="India"></a>
   
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>South Africa </h2>
    <a href="sa.php">
    <img src="css/logosa.png" alt="India" width=400px height=450px></a>

  </div>

</div>




<br /><br /><br /><br />

</div>
</body>
</html>


<?php

include("auth.php"); 




//include auth.php file on all secure pages ?>


<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<title>West Indies</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/split.css">

</head>
<body style="background: linear-gradient(to bottom right, #ffffff 0%, #ffffcc 100%");
    >
<div class="navbar">
<img src="css/wi.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS"><center>


{West Indies Database}</center> </h1>

 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>


 <a style="color: red" href="welcome.php"><img src="css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>
 
 <a href="search.php"><img src="css/house.png" width="40" height="50">search</a>


  </div>




<div class="form">

<div class="split left">
  <div class="centered">
   <a href="wicoach.php"> <img src="css/coach.png" alt=" Squad"></a>

    
  </div>
</div>

<div class="split right">
  <div class="centered">
    <a href="wisquad.php"> <img src="css/squad1.png" alt="Avatar man"></a>
   
    
  </div>
</div>



<br /><br /><br /><br />

</div>
</body>
</html>
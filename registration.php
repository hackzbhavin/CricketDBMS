<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/reg.css" />
</head>
<body style="background-image: url('css/bowl.jpg'); background-position: center ;height: 900px; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
font-family: "Arial",  red serif);">
<?php
	date_default_timezone_set('Asia/Kolkata');
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            header("Location: login.php");
        }
    }else{
?>

<div class="navbar">

  <img src="css/bat4.png" width="85" height="70"; style="float: left;">

<h1 style="float: left ; color: #ffcc99";>


{Cricket. Database.} </h1>
<a href="aboutus.php">About US</a>
  <a href="viewfix.php">Upcoming Matches</a>
 
  <a href="login.php">Login Page</a>
  <!--<a href="registration.php">New? Register</a>!-->
  
<a href="Home.php">Home</a>

</div>

<div class="login">
<h1>Registration</h1>
<form name="registration" action="registration.php" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />
<p>Already have an account?</p>
<a href="login.php">Sign in</a> <br /><br />

</div>
<?php } ?>
</body>
</html>

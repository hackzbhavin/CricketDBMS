<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/login.css" />
</head>
<body >

<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: welcome.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>




<div class="navbar">

<img src="css/bat4.png" width="85" height="70"; style="float: left;">

<h1 style="float: left; font-style: Comic Sans MS; color: #ffcc99;"  >

 Cricket.Database. </h1>
 <a href="aboutus.php">About US</a>
 <a href="adminlogin.php">Admin Login</a>
 <a href="userviewfix.php">Upcoming Matches</a>
 
   
 <!-- <a href="login.php">Login Page</a>!-->
  <a href="registration.php">New? Register</a>
  <a href="Home.php">Home</a>
  
</div>
<div class = "login">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />

<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />

</div>



 <?php
 } ?>




</body>


</html>

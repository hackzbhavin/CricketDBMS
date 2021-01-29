

<?php
include("auth.php");

$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'cricket2');

$querry = "select * from users ";
$result = mysqli_query($con,$querry);

$row= mysqli_num_rows($result);
mysqli_close($con);

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM users WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: users.php');
}


?>


<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<title>USERS  Database</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link rel="stylesheet" type="text/css" href="css/crud.css">

</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;


}

th, td {
	border= 1px ;
	width: 900px; 
	line-height: 30px;
  text-align: center;
  padding: 8px;
}

/*body{
	background: linear-gradient(to bottom right, #ffffff 0%, #ffffcc 100%;
}
*/
tr:nth-child(even) {background-color: #f2f2f2;}
</style>








<body >
	<div class="navbar">
<img src="css/reg.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{Registered Users Database.} </h1>


 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>


 

 <a style="color: red" href="adminwelcome.php"><img src="css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>

  </div>

  <div id="mySidenav" class="sidenav">
  <a href="adminwelcome.php" id="about">Welcome</a>
  <a href="teams.php" id="blog">Teams</a>
  <a href="coach.php" id="projects">Coach</a>
  <a href="ranking.php" id="contact">Ranking</a>
</div>
 


<table >
	<tr>
				
		
			<th>ID</th>
			<th>USER NAME</th>
			<th>EMAIL ID</th>
			<th>Date of Registeration and Time</th>
			 <th colspan="10">Action</th>
		
			
		</tr>

		<?php
		global $result;
		while ($rows=mysqli_fetch_assoc($result)):?>
			<tr align="center">
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['trn_date'];?></td>
				<td>
                <a href="users.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td>
				
					
				</td>

			</tr>
			




		

<?php endwhile;?>





</table>






</body>
</html>
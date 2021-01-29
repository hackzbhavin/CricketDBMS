

<?php
include('auth.php');


$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'cricket2');

$querry = "select * from newzeland_coach";
$result = mysqli_query($con,$querry);

$row= mysqli_num_rows($result);
mysqli_close($con);




?>


<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<title> New Zealand Coach Database</title>
<link rel="stylesheet" type="text/css" href="css/home.css">

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









<body>
	<div class="navbar">
<img src="css/nz.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{New Zealand Coach Database.} </h1>

 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>


 <a style="color: red" href="welcome.php"><img src="css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>
 

  </div>


<table >
	<tr>
				
		
			<th>Team</th>
			<th>Coach Name</th>
			<th>Date Of Birth</th>
			<th>Age</th>
			<th>Nationality</th>
			<th>Speciality</th>
			

		</tr>

		<?php
		global $result;
		while ($rows=mysqli_fetch_assoc($result)):?>
			<tr align="center" >
				
				<td><?php echo $rows['team'];?></td>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['dob'];?></td>
				<td><?php echo $rows['age'];?></td>
				<td><?php echo $rows['born_country'];?></td>
				<td><?php echo $rows['speciality']; ?>
					
				</td>

			</tr>
			
		

<?php endwhile;?>


</table>






</body>
</html>
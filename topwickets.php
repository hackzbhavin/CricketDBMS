

<?php
include("auth.php");

$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'cricket2');

$querry = "select name,nat,played,wickets from Afganistan as w union all 
select name,nat,played,wickets from India as w union all
select name,nat,played,wickets from England as w union all 
select name,nat,played,wickets from WEST_INDIES as w union all 
select name,nat,played,wickets from Pakistan as w union all 
select name,nat,played,wickets from australia as w union all 
select name,nat,played,wickets from bangladesh as w union all 
select name,nat,played,wickets from newzealand as w union all 
select name,nat,played,wickets from SouthAfrica as w union all 
select name,nat,played,wickets from Srilanka as w
ORDER by wickets DESC; ";
$result = mysqli_query($con,$querry);

$row= mysqli_num_rows($result);
mysqli_close($con);




?>


<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<title>Most Wickets Takers Database</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/sidenav.css">

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
<img src="css/bowl4.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{ Most Wickets Takers Database.} </h1>


 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>


 

 <a style="color: red" href="welcome.php"><img src="css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>

  </div>

  <div id="mySidenav" class="sidenav">
  <a href="welcome.php" id="about">Welcome</a>
  <a href="teams.php" id="blog">Teams</a>
  <a href="coach.php" id="projects">Coach</a>
  <a href="ranking.php" id="contact">Ranking</a>
</div>
 


<table >
	<tr>
				
		
			<th>Player Name</th>
		    <th>Playing for</th>
		     <th>Matches Played</th>
		    <th>Wickets Taken</th>
			

		</tr>

		<?php
		global $result;
		while ($rows=mysqli_fetch_assoc($result)):?>
			<tr align="center">
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['nat'];?></td>
				<td><?php echo $rows['played'];?></td>
				<td><?php echo $rows['wickets'];?></td>
					
				</td>

			</tr>
			




		

<?php endwhile;?>


</table>






</body>
</html>
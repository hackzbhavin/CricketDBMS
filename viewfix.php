

<?php
//include("auth.php");

$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'fix');

$querry = "select *  from userview2";
$result = mysqli_query($con,$querry);

$row= mysqli_num_rows($result);
mysqli_close($con);




?>


<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<title> Fixtures </title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link rel="stylesheet" type="text/css" href="css/crud.css">
<link rel="stylesheet" type="text/css" href="css/wel.css">
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
<img src="css/fixt.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{Upcoming Matches (Fixtures)} </h1>


 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>

 <a href="Home.php"><img src="css/house.png" width="40" height="50">Home</a>
 

 

  </div>

  <div id="mySidenav" class="sidenav">

  <a href="teams.php" id="blog">Teams/Squad/Coaches</a>
  
  <a href="ranking.php" id="contact">Ranking</a>
</div>
 


<table >

				
		<tr>
            <th>Format</th>
            <th>Team 1</th>
            <th>Team 2</th>
            <th>Location</th>
            <th>Date Scheduled</th>
       
        </tr>

	

		<?php
		global $result;
		while ($rows=mysqli_fetch_assoc($result)):?>
			<tr align="center">
				
				<td><?php echo $rows['typ'];?></td>
				<td><?php echo $rows['teamone'];?></td>
				<td><?php echo $rows['teamtwo'];?></td>
				<td><?php echo $rows['loc'];?></td>
				
				<td><?php echo $rows['date'];?></td>
				
					
				</td>

			</tr>

			
		

<?php endwhile;?>

 
</table>





<center>  <a href="viewhistory.php" class="del_btn">Recent Matches</a></center>
			
</body>
</html>
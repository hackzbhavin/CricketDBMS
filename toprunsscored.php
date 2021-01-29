

<?php
include("auth.php");

$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'cricket2');

$querry = "select name,played,nat,runs from Afganistan as r union all 
select name,played,nat,runs from India as r union all
select name,played,nat,runs from England as r union all 
select name,played,nat,runs from WEST_INDIES as r union all 
select name,played,nat,runs from Pakistan as r union all 
select name,played,nat,runs from australia as r union all 
select name,played,nat,runs from bangladesh as r union all 
select name,played,nat,runs from newzealand as r union all 
select name,played,nat,runs from SouthAfrica as r union all 
select name,played,nat,runs from Srilanka as r 
ORDER by runs DESC; ";
$result = mysqli_query($con,$querry);

$row= mysqli_num_rows($result);
mysqli_close($con);




?>








<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8">
<title>Top Most Runs Database</title>
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
<img src="css/bat.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{Most Runs Scorers Database.} </h1>


 <a href="aboutus.php"><img src="css/us.png" width="40" height="60">Abt US</a>


 

 <a style="color: red" href="welcome.php"><img src="css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>

  </div>

  <div id="mySidenav" class="sidenav">
  <a href="welcome.php" id="about">Welcome</a>
  <a href="teams.php" id="blog">Teams</a>
  <a href="coach.php" id="projects">Coach</a>
  <a href="ranking.php" id="contact">Ranking</a>
</div>

<form  method="post" action="search.php?go"  id="searchform"> 
        <input  type="text" name="name"> 
        <input  type="submit" name="submit" value="Search"> 
      </form> 


<table >
	<tr>
				
		
			<th>Player Name</th>
			<th>Playing For</th>
		    <th>Matches played </th>
			<th>Runs Scored</th>
			

		</tr>

		<?php
		global $result;
		while ($rows=mysqli_fetch_assoc($result)):?>
			<tr align="center">
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['nat'];?></td>
				<td><?php echo $rows['played'];?></td>
				<td><?php echo $rows['runs'];?></td>
					
				</td>

			</tr>
			




		

<?php endwhile;?>


</table>






</body>
</html>
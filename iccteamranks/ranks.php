<?php

include("auth.php"); 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'cricket2');


$querry1 = "select * from Test_rank order by POINTS desc";
$querry2 = "select * from odi_rank order by rank";
$querry3 = "select * from Ttwenty_rank order by rank";

$result1 = mysqli_query($con,$querry1);// querry=test rank stored
$result2 = mysqli_query($con,$querry2);// querry=ODI rank stored
$result3 = mysqli_query($con,$querry3);// querry=T20 rank stored

$row1= mysqli_num_rows($result1);
$row2= mysqli_num_rows($result2);
$row3= mysqli_num_rows($result3);

mysqli_close($con);


/* if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM odi_rank WHERE id=$id");

        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
          $team = $n['TEAM']
    $match = $n['MATCHES_PLAYED']
    $win = $n['wins']
    $lose = $n['lost']
    $nrr = $n['NRR']
        $points =$n ['POINTS']
        $ratings = $n['RATINGS']
         $rank = $n['RANKS']
         $wc = $n['WORLD_CUPS']
        }
    }
*/


//include auth.php file on all secure pages ?>











<!DOCTYPE html>
<html>
<head>
  <title>Admin Ranks </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/ranking.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/sidenav.css">

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
<img src="../css/bat4.png" width="150" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{Ranking. Database.} </h1>

 <a href="aboutus.php"><img src="../css/us.png" width="40" height="60">Abt US</a>


 
 <a style="color: red" href="welcome.php"><img src="../css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>

  </div>


<h2><center> Rankings </center></h2>


<button class="tablink" onclick="openPage('Test', this, 'red')">Test</button>
<button class="tablink" onclick="openPage('ODI', this, 'green')" id="defaultOpen">ODI</button>
<button class="tablink" onclick="openPage('T20', this, 'blue')">T20</button>


  </div>

  <div id="mySidenav" class="sidenav">
  <a href="welcome.php" id="about">Welcome</a>
  <a href="teams.php" id="blog">Teams</a>
  <a href="coach.php" id="projects">Coach</a>
  <a href="ranking.php" id="contact">Ranking</a>
</div>







<div id="Test" class="tabcontent">
  <h2 ><center>TEST</center></h2>

<table >
  <tr>
        
    
      <th>Team Name</th>
      <th>Matches Played</th>
      <th>Matches Win</th>
      <th>Matches Lost</th>
      <th>Net Run Rate</th>
      <th>Points</th>
      <th>Team Ratings</th>
      <th>World Ranking</th>
       <th colspan="10">Action</th>
      

    </tr>

    <?php
    global $result1;
    while ($rows1=mysqli_fetch_assoc($result1)):?>
      <tr align="center">
        <td><?php echo $rows1['TEAM'];?></td>
        <td><?php echo $rows1['MATCHES_PLAYED'];?></td>
        <td><?php echo $rows1['wins'];?></td>
        <td><?php echo $rows1['lost'];?></td>
        <td><?php echo $rows1['NRR'];?></td>
        <td><?php echo $rows1['POINTS'];?></td>
        <td><?php echo $rows1['RATINGS']; ?></td>
        <td><b><?php echo $rows1['Rank']; ?></b></td>
         <td><?php
               echo "<td><a href='updatet20.php?id=".$rows1['id']."'><button type='button' class='btn btn-warning'>Update</button></a>";
               ?>
            </td>
       
      </tr>
      
    

<?php endwhile;?>


</table>












  </div>

<div id="ODI" class="tabcontent">
  <h2>
<img style="float: left;"  src="../css/wc.png" width=200px height=200px>

    <center>ONE DAY INTERNATIONAL</center></h2>
  



<table >
  <tr>
        
    
      <th>Team Name</th>
      <th>Matches Played</th>
      <th>Matches Win</th>
      <th>Matches Lost</th>
      <th>Net Run Rate</th>
      <th>Points</th>
      <th>Team Ratings</th>
      <th>World Ranking </th>
      <th>World Cups</th>

    </tr>

    <?php
    global $result2;
    while ($rows2=mysqli_fetch_assoc($result2)):?>
      <tr align="center">
        <td><?php echo $rows2['TEAM'];?></td>
        <td><?php echo $rows2['MATCHES_PLAYED'];?></td>
        <td><?php echo $rows2['wins'];?></td>
        <td><?php echo $rows2['lost'];?></td>
        <td><?php echo $rows2['NRR'];?></td>
        <td><?php echo $rows2['POINTS'];?></td>
        <td><?php echo $rows2['RATINGS']; ?></td>
        <td><b><?php echo $rows2['RANK']; ?></b></td>
        <td><?php echo $rows2['WORLD_CUPS']; ?></td>
         <td><?php
               echo "<td><a href='updateodi.php?id=".$rows2['id']."'><button type='button' class='btn btn-warning'>Update</button></a>";
               ?>
            </td>
      </tr>
      
    

<?php endwhile;?>
</table>


</div>
<div id="T20" class="tabcontent">
  <h2><center>
  T20 20-20</center></h2>

<table >
  <tr>
        
    
      <th>Team Name</th>
      <th>Matches Played</th>
      <th>Matches Win</th>
      <th>Matches Lost</th>
      <th>Net Run Rate</th>
      <th>Points</th>
      <th>Team Ratings</th>
      <th>World Ranking </th>
      <th>World Cups</th>

    </tr>

    <?php
    global $result3;
    while ($rows3=mysqli_fetch_assoc($result3)):?>
      <tr align="center">
        <td><?php echo $rows3['TEAM'];?></td>
        <td><?php echo $rows3['MATCHES_PLAYED'];?></td>
        <td><?php echo $rows3['wins'];?></td>
        <td><?php echo $rows3['lost'];?></td>
        <td><?php echo $rows3['NRR'];?></td>
        <td><?php echo $rows3['POINTS'];?></td>
        <td><?php echo $rows3['RATINGS']; ?></td>
        <td><b><?php echo $rows3['RANK']; ?></b></td>
        <td><?php echo $rows3['WORLD_CUPS']; ?></td>
         <td><?php
               echo "<td><a href='updatetest.php?id=".$rows3['id']."'><button type='button' class='btn btn-warning'>Update</button></a>";
               ?>
            </td>
      </tr>
      
<?php endwhile;?>
</table>
</div>

<div class="clearfix"></div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
   
</body>
</html> 


<?php

include("auth.php"); 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'cricket2');


$querry1 = "select * from  iccranktest1";
$querry2 = "select * from  iccrankodi1 ";
$querry3 = "select * from  iccrankt201 ";

$result1 = mysqli_query($con,$querry1);// querry=test rank stored
$result2 = mysqli_query($con,$querry2);// querry=ODI rank stored
$result3 = mysqli_query($con,$querry3);// querry=T20 rank stored

$row1= mysqli_num_rows($result1);
$row2= mysqli_num_rows($result2);
$row3= mysqli_num_rows($result3);

mysqli_close($con);




//include auth.php file on all secure pages ?>











<!DOCTYPE html>
<html>
<head>
  <title> View ICC Ranks </title>
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
/*tr:nth-child(even) {background-color: #f2f2f2;}*/
</style>





<body style=" background: linear-gradient(to top right, #ccff99 29%, #ccccff 76%);">

<div class="navbar">
<img src="../css/icc.png" width="250" height="150"; style="float: left;">

<h1 style="float: left; color:#ffcc99; "font-style: "Comic Sans MS">


{ICC Man Ranking. Database.} </h1>

 <a href="../aboutus.php"><img src="../css/us.png" width="40" height="60">Abt US</a>


 
 <a style="color: red" href="../welcome.php"><img src="../css/log.png" width="40" height="50"><?php echo $_SESSION['username']; ?></a>

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
        
     <th></th>
      <th>Rank</th>
      <th>Nation Playing for</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Points</th>
      

    </tr>

    <?php
    global $result1;
    while ($rows1=mysqli_fetch_assoc($result1)):?>
      <tr align="center">
       <td><?php               
       echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows1['image'] ).'"/>';?></td>
        <td><b style="font-size:50px"><?php echo $rows1['rank'];?></b></td>
         <td><b style="font-size:20px"><?php echo $rows1['nat'];?></b></td>
        <td><?php echo $rows1['first'];?></td>
        <td><?php echo $rows1['last'];?></td>
         <td><?php echo $rows1['points'];?></td>
      
       
      </tr>
      
    

<?php endwhile;?>


</table>












  </div>

<div id="ODI" class="tabcontent">
  <h2>

    <center>ONE DAY INTERNATIONAL</center></h2>
  



<table >
  <tr>
        
    <th></th>

      <th>Rank</th>
      <th>Nation Playing for</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Points</th>
      
    </tr>

    <?php
    global $result2;
    while ($rows2=mysqli_fetch_assoc($result2)):?>
      <tr align="center">

  
 
                                 
       <td><?php               
       echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows2['image'] ).'"/>';?></td>
         
       <td><b style="font-size:50px"><?php echo $rows2['rank'];?></b></td>
        <td><b style="font-size:20px"><?php echo $rows2['nat'];?></b></td>
        <td><?php echo $rows2['first'];?></td>
        <td><?php echo $rows2['last'];?></td>
        <td><?php echo $rows2['points'];?></td>
       
      </tr>
    

<?php endwhile;?>
</table>


</div>
<div id="T20" class="tabcontent">
  <h2><center>
  T20 20-20</center></h2>

<table >
  <tr>
       <th></th> 
    <th>Rank</th>
      <th>Nation Playing for</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Points</th>
      
    </tr>

    <?php
    global $result3;
    while ($rows3=mysqli_fetch_assoc($result3)):?>
      <tr align="center">
       <td><?php               
       echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows3['image'] ).'"/>';?></td>
         
       <td><b style="font-size:50px"><?php echo $rows3['rank'];?></b></td>
        <td><b style="font-size:20px"><?php echo $rows3['nat'];?></b></td>
        <td><?php echo $rows3['first'];?></td>
        <td><?php echo $rows3['last'];?></td>
        <td><?php echo $rows3['points'];?></td>
        
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


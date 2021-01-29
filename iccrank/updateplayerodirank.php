<?php
$id = $_GET['id'];
$update = false;
require('db.php');




?>
<!DOCTYPE html>
<html>
<head>
    <title>update data odi</title>
    <link rel="stylesheet" type="text/css" href="../css/crud.css">
   
    <link rel="stylesheet" type="text/css" href="../css/wel.css">
</head>
<body style=" background: linear-gradient(to top right, #ccff99 29%, #ccccff 76%);">
	
<?php 
if (isset($_REQUEST['rank'])){
		$ranks = stripslashes($_REQUEST['rank']); // removes backslashes
		$nati = stripslashes($_REQUEST['nat']);
		$fi = stripslashes($_REQUEST['first']);
		$la = stripslashes($_REQUEST['last']);
		
        $point = stripslashes($_REQUEST['points']);
       


        $query = "UPDATE  iccrankodi SET rank='$ranks',nat='$nati', first='$fi', last='$la', points='$point' WHERE id=$id";
        $result = mysqli_query($con, $query);
        if($result){
            header("Location: iccranking.php");
    	}
    }else{ 
?>
<?php 
$res = mysqli_query($con,"SELECT * FROM  iccrankodi where id = $id");
$row = mysqli_fetch_array($res);
?>



<form   method="post" action="" >

        <div class="input-group">
            <center><h1>Update ODI ICC Player Ranking Data</h1></center>
            <center><label>Rank</label></center>
            <input type="text" name="rank" value="<?php echo $row['rank'];?>">
        </div>

        <div class="input-group">
            <center><label>Nation Playing For</label></center>
            <input type="text" name="nat" value="<?php echo $row['nat'];?> ">
        </div>
        <div class="input-group">
            <center><label>Player First Name</label></center>
            <input type="text" name="first" value="<?php echo $row['first'];?>">
        </div>
        <div class="input-group">
            <center><label>Player Last Name</label></center>
            <input type="text" name="last" value="<?php echo $row['last'];?>">
        </div>
        <div class="input-group">
            <center><label>Points</label></center>
            <input type="text" name="points" value="<?php echo $row['points'];?>">
        </div>



        <div class="input-group">
           
    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>

        </div>
    </form>

<?php } ?>


</body>
</html>

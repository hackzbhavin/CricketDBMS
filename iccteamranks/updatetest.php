<?php
$id = $_GET['id'];
$update = false;
require('db.php');

$team ="";
        $match=""; 
        $win = "";
        $lose = "";
        $nrr =""; 
        $points =""; 
        $ratings = "";
         $rank = "";
         $wc ="";



?>
<!DOCTYPE html>
<html>
<head>
    <title>update data Test</title>
    <link rel="stylesheet" type="text/css" href="../css/crud.css">
   
    <link rel="stylesheet" type="text/css" href="../css/wel.css">
</head>
<body>
	
<?php 
if (isset($_REQUEST['TEAM'])){
		$team = stripslashes($_REQUEST['TEAM']); // removes backslashes
		$match = stripslashes($_REQUEST['MATCHES_PLAYED']);
		$win = stripslashes($_REQUEST['wins']);
		$lose = stripslashes($_REQUEST['lost']);
		$nrr = stripslashes($_REQUEST['NRR']);
        $points = stripslashes($_REQUEST['POINTS']);
        $ratings = stripslashes($_REQUEST['RATINGS']);
         $rank = stripslashes($_REQUEST['Rank']);
         $wc = stripslashes($_REQUEST['WORLD_CUPS']);


        $query = "UPDATE  Test_rank SET TEAM='$team',MATCHES_PLAYED='$match', wins='$win', lost='$lose', NRR='$nrr',POINTS='$points',RATINGS='$ratings',Rank='$rank',WORLD_CUPS='$wc' WHERE id=$id";
        $result = mysqli_query($con, $query);
        if($result){
            header("Location: ranks.php");
    	}
    }else{ 
?>
<?php 
$res = mysqli_query($con,"SELECT * FROM  Test_rank where id = $id");
$row = mysqli_fetch_array($res);
?>



<form   method="post" action="" >

        <div class="input-group">
            <center><h1>Update Test Data</h1></center>
            <center><label>TEAM</label></center>
            <input type="text" name="TEAM" value="<?php echo $row['TEAM'];?>">
        </div>

        <div class="input-group">
            <center><label>Matches Played</label></center>
            <input type="text" name="MATCHES_PLAYED" value="<?php echo $row['MATCHES_PLAYED'];?> ">
        </div>
        <div class="input-group">
            <center><label>Wins</label></center>
            <input type="text" name="wins" value="<?php echo $row['wins'];?>">
        </div>
        <div class="input-group">
            <center><label>Lost</label></center>
            <input type="text" name="lost" value="<?php echo $row['lost'];?>">
        </div>
        <div class="input-group">
            <center><label>NRR</label></center>
            <input type="text" name="NRR" value="<?php echo $row['NRR'];?>">
        </div>


<div class="input-group">
            <center><label>Points</label></center>
            <input type="text" name="POINTS" value="<?php echo $row['POINTS'];?>">
        </div>
        <div class="input-group">
            <center><label>Ratings</label></center>
            <input type="text" name="RATINGS" value="<?php echo $row['RATINGS'];?>">
        </div>
        <div class="input-group">
            <center><label>Ranks</label></center>
            <input type="text" name="Rank" value="<?php echo $row['Rank'];?>">
        </div>
<div class="input-group">
            <center><label>WORLD CUPS</label></center>
            <input type="text" name="WORLD_CUPS" value="<?php echo $row['WORLD_CUPS'];?>">
        </div>

        <div class="input-group">
           
    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>

        </div>
    </form>

<?php } ?>


</body>
</html>

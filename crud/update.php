<?php
$id = $_GET['id'];

$update = false;

require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Fixtures</title>
    <link rel="stylesheet" type="text/css" href="../css/crud.css">
   
    <link rel="stylesheet" type="text/css" href="../css/wel.css">
</head>
<body>
	
<?php 
if (isset($_REQUEST['typ'])){
		$type = stripslashes($_REQUEST['typ']); // removes backslashes
		$team1 = stripslashes($_REQUEST['teamone']);
		$team2 = stripslashes($_REQUEST['teamtwo']);
		$location = stripslashes($_REQUEST['loc']);
		$date = stripslashes($_REQUEST['date']);

        $query = "UPDATE users SET typ='$type',teamone='$team1', teamtwo='$team2', loc='$location', date='$date' WHERE id=$id";
        $result = mysqli_query($con, $query);
        if($result){
            header("Location: index.php");
    	}
    }else{ 
?>
<?php 
$res = mysqli_query($con,"SELECT * FROM users where id = $id");
$row = mysqli_fetch_array($res);
?>



<form   method="post" action="" >

        <div class="input-group">
            <center><h1>Add new Data</h1></center>
            <center><label>Foramt</label></center>
            <input type="text" name="typ" value="<?php echo $row['typ'];?>">
        </div>

        <div class="input-group">
            <center><label>Team 1</label></center>
            <input type="text" name="teamone" value="<?php echo $row['teamone'];?> ">
        </div>
        <div class="input-group">
            <center><label>Team 2</label></center>
            <input type="text" name="teamtwo" value="<?php echo $row['teamtwo'];?>">
        </div>
        <div class="input-group">
            <center><label>Location</label></center>
            <input type="text" name="loc" value="<?php echo $row['loc'];?>">
        </div>
        <div class="input-group">
            <center><label>Date</label></center>
            <input type="text" name="date" value="<?php echo $row['date'];?>">
        </div>

        <div class="input-group">
           
    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>

    <button class="btn" type="submit" name="save" >Add</button>

        </div>
    </form>

<?php } ?>


</body>
</html>

<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'fix');

	// initialize variables
	$team1 = "";
	$team2 = "";
	$location = "";
	//$id = 0;
	$update = false;

	if (isset($_POST['save'])) {

		$type = $_POST['typ'];
		$team1 = $_POST['teamone'];
		$team2 = $_POST['teamtwo'];
		$location = $_POST['loc'];
		$datee = $_POST['date'];

		mysqli_query($db, "INSERT INTO users (typ, teamone, teamtwo, loc, date) VALUES ('$type','$team1', '$team2','$location','$datee')"); 
		$_SESSION['message'] = "New Data Created!"; 
		header('location: index.php');
	}
if (isset($_POST['update'])) {
	$id = $_GET['id'];
	$team1 = $_POST['teamone'];
	$team2 = $_POST['teamtwo'];
	$location = $_POST['loc'];
		$datee = $_POST['date'];


	mysqli_query($db, "UPDATE users SET teamone='$team1', teamtwo='$team2',loc='$location' WHERE id=$id");
	$_SESSION['message'] = "Data  updated!"; 
	header('location: index.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM users WHERE id=$id");
	$_SESSION['message'] = "Data deleted!"; 
	header('location: index.php');
}
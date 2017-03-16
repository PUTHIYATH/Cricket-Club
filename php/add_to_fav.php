<?php
	session_start();
	require('connect.php');
	
	$ID=$_REQUEST['id'];
	$email=$_SESSION['logged_in'];
	
	$query = "SELECT * FROM `fav` WHERE `EMAIL`='$email'AND `ID`='$ID'";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	if(!mysqli_num_rows($result))
	{	
		$query = "INSERT INTO `fav` VALUES ( '$email','$ID')";
		$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	}
	header("Location: ../index.php?flag=2&song=$ID");
?>
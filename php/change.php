<?php

	require('connect.php');
	
	
	$name=$_REQUEST['name'];
	$pass=$_REQUEST['pass'];
	

	
	
	
	$query = "UPDATE `login` SET `PASSWORD`='$pass' WHERE `EMAIL`='$name'";
	
	
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../index.php?success=55");
?>
<?php

	require('connect.php');
	
	$email=$_REQUEST['email'];

	
	$query = "DELETE FROM `login` WHERE `EMAIL`='$email'";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	$query = "DELETE FROM `user` WHERE `EMAIL`='$email'";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../admin.php?success=2");
?>
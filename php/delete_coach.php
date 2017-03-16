<?php

	require('connect.php');
	
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	
	$query = "DELETE FROM `coach` WHERE `id`='$id'";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	$query = "DELETE FROM `login` WHERE `email`='$name'";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	$query = "DELETE FROM `user` WHERE `name`='$name'";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../admin.php?success=44");
?>
<?php

	require('connect.php');
	
	$id=$_REQUEST['id'];
	
	
	$query = "DELETE FROM `players` WHERE `id`='$id'";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../admin.php?success=4");
?>
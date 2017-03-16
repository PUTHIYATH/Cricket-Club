<?php

	require('connect.php');
	
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$exp=$_REQUEST['exp'];
	$special=$_REQUEST['special'];
	$rating=$_REQUEST['rating'];	
	$image=$_REQUEST['image'];
	$search=$id." ".$name." ".$rating." ".$special." ".$exp;
	

	
	
	
	$query = "INSERT INTO `coach` VALUES 
	('$id','$name','$exp','$special','$rating','$image','$search')";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	$query = "INSERT INTO `login` VALUES 
	('$name','123456','NO')";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	$query = "INSERT INTO `user` VALUES 
	('$name','$name','test_value','test_value')";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../admin.php?success=11");
	
?>
<?php

	require('connect.php');
	
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$height=$_REQUEST['height'];
	$weight=$_REQUEST['weight'];
	$category=$_REQUEST['category'];
	$rating=$_REQUEST['rating'];	
	$age=$_REQUEST['age'];
	$image=$_REQUEST['image'];
	$search=$id." ".$name." ".$rating." ".$category." ".$age;
	

	
	
	
	$query = "INSERT INTO `players` VALUES 
	('$id','$name','$height','$weight','$category','$rating','$age','$image','$search')";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../admin.php?success=1");
	
?>
<?php

	require('connect.php');
	
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$height=$_REQUEST['height'];
	$weight=$_REQUEST['weight'];
	$category=$_REQUEST['category'];
	$rating=$_REQUEST['rating'];	
	$age=$_REQUEST['age'];
	$search=$id." ".$name." ".$rating." ".$category." ".$age;
	

	
	
	
	$query = "UPDATE `players` SET 
	`NAME`='$name',
	`HEIGHT`='$height',
	`WEIGHT`='$weight',
	`CATEGORY`='$category',
	`AGE`='$age',
	`RATING`='$rating',
	`SEARCH`='$search'
	WHERE `ID`=$id";
	
	
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../admin.php?success=3");
?>
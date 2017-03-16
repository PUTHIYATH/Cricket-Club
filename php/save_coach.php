<?php

	require('connect.php');
	
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$exp=$_REQUEST['exp'];
	$special=$_REQUEST['special'];
	
	$rating=$_REQUEST['rating'];	
	
	$search=$id." ".$name." ".$rating." ".$special." ".$exp;
	

	
	
	
	$query = "UPDATE `coach` SET 
	`NAME`='$name',
	`EXP`='$exp',
	`SPECIAL`='$special',
	`RATING`='$rating',
	`SEARCH`='$search'
	WHERE `ID`=$id";
	
	
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	header("Location: ../admin.php?success=33");
?>
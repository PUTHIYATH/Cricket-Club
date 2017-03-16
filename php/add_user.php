<?php

	require('connect.php');
	
	$email=$_REQUEST['email'];
	$name=$_REQUEST['name'];
	$contact=$_REQUEST['contact'];
	$pass=$_REQUEST['password'];
	$address=$_REQUEST['address'];
	
	
	
	
	$query = "INSERT INTO `login` VALUES ( '$email','$pass','NO')";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	
	$query = "INSERT INTO `user` VALUES ( '$email','$name','$address','$contact')";
	$result = mysqli_query($connect,$query) or die(mysqli_error($connect));
	session_start();
	$_SESSION['logged_in']=$email;
	$_SESSION['access']="NO";
	header("Location: ../index.php");
?>
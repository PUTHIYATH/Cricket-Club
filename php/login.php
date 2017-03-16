<?php
	session_start();
	$mail=$_REQUEST['email'];
	$pass=$_REQUEST['password'];
	
	require('connect.php');
	
	$query="SELECT * FROM `login` WHERE `email`='$mail' and `password`='$pass'";
	$result= mysqli_query($connect, $query) or die('unable to connectto login DB');
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result))
	{
		
		$_SESSION['logged_in']=$mail;
		$_SESSION['access']=$row['ACCESS'];
		if($row['ACCESS']=="YES")
		{
			header("Location: ../admin.php");
		}
		else
		{
			header("Location: ../index.php");
		}
	}
	else
	{
		header("Location: ../index.php?flag=1");
	}
	

?>
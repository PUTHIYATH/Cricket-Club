<?php

$mysql_host = "localhost";
$mysql_database = "cricket";
$mysql_user = "root";
$mysql_password = "";



// Create connection
$connect=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
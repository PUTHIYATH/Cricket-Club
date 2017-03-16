<?php 
	session_start();
	require('php/connect.php'); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!-- css -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico">
        
<!-- javascript -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> 
<script src="js/respond.js"></script>
<script>
$(function () {
  $('[data-toggle="popover"]').popover()
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$('#pop_btn').popover('hide');
</script>


    


<title>Cricket</title>
</head>

<body background="images/CricketGround.jpg">
<input id="v_id" type="hidden" value="EgPRLAJB13c">
<div class="overlay">
    	<div id="player"></div>
 </div>
 
<div class="container-fluid">
	<div class="row">
             <?php include('php/navbar.php'); ?>
	</div>
    
    <div class="row"  style="margin-top:20px;">

        <div class="col-xs-12">
        	  <?php
		 	if((!isset($_SESSION['logged_in']))||$_SESSION['access']=="NO")
			{
				echo "<img class='jumbotron' src='images/oops_login.jpg' />";
			}
			else
			{
				include('php/admin_tabs.php');
			}
		?>      
        </div>
        
	</div> 
    
</div>

    
<?php
	if(isset($_REQUEST['edit'])&&$_REQUEST['edit']==1)
	{
		echo "<script>
						$('#myTab a[href=\"#managePlayer\"]').tab('show');
						$('#editPlayer').modal('show');
			</script>";
	}
	if(isset($_REQUEST['edit'])&&$_REQUEST['edit']==2)
	{
		echo "<script>
						$('#myTab a[href=\"#manageCoach\"]').tab('show');
						$('#editCoach').modal('show');
			</script>";
	}
	if(isset($_REQUEST['success']))
	{
		if($_REQUEST['success']==1)
		{
			echo "<script>
			$('#myTab a[href=\"#addPlayer\"]').tab('show');
			alert('Player Successfully Added !');
			</script>";
		}
		if($_REQUEST['success']==11)
		{
			echo "<script>
			$('#myTab a[href=\"#addCoach\"]').tab('show');
			alert('Coach Successfully Added !');
			</script>";
		}
		if($_REQUEST['success']==2)
		{
			echo "<script>
			$('#myTab a[href=\"#user\"]').tab('show');
			alert('User Deleted Successfully !');		
			</script>";
		}
		if($_REQUEST['success']==3)
		{
			echo "<script>
			$('#myTab a[href=\"#managePlayer\"]').tab('show');
			alert('Player Saved Successfully !');		
			</script>";
		}
		if($_REQUEST['success']==33)
		{
			echo "<script>
			$('#myTab a[href=\"#manageCoach\"]').tab('show');
			alert('coach Saved Successfully !');		
			</script>";
		}
		if($_REQUEST['success']==4)
		{
			echo "<script>
			$('#myTab a[href=\"#managePlayer\"]').tab('show');		
			</script>";
		}
		if($_REQUEST['success']==44)
		{
			echo "<script>
			$('#myTab a[href=\"#manageCoach\"]').tab('show');		
			</script>";
		}
	}
	
?>
</body>
</html>
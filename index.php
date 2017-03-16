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


<div class="overlay">
    	<div id="player"></div>
 </div>
 
<div class="container-fluid">
	<div class="row">
             <?php include('php/navbar.php'); ?>
	</div>
    
    <div class="row" style="margin-top:70px;">
    	<div class="col-xs-1">
             <?php include('php/side_navbar.php'); ?>
        </div>
        <div class="col-xs-11">
        	<?php
					if(isset($_REQUEST['flag'])&&$_REQUEST['flag']=='filter')
					{
						$query = "Select * from players where `category`='bat' order by rating desc limit 10";
						$result = mysqli_query($connect, $query);
					echo "<div class='row' style='margin-top:50px;'>
						<div class='col-xs-1'>
							<div class='song-icon'>
								
								<img src='images/genre/bat.jpg' class='img-responsive' >
								<div class='song-caption'>Top 10</div>
								<div class='song-caption'>100-0</div>
								            
							</div>  
						</div>";
					while($row=mysqli_fetch_array($result))
					{ 
					
						echo "
						<div class='col-xs-1'>
							<div class='song-icon'>
								<a href='index.php?show=".$row['ID']."'>
								<img src='images/album/".$row['IMAGE']."' class='img-responsive' >
								<div class='song-caption'>".$row['NAME']."</div>
								<div class='song-caption'>".$row['RATING']."</div>
								</a>            
							</div>  
						</div>";
					}
					echo "</div>";
					$query = "Select * from players where `category`='bowl' order by rating desc limit 10";
						$result = mysqli_query($connect, $query);
					echo "
						<div class='row' style='margin-top:50px;'>
						<div class='col-xs-1'>
							<div class='song-icon'>
								
								<img src='images/genre/bowl.jpg' class='img-responsive' >
								<div class='song-caption'>Top 10</div>
								<div class='song-caption'>100-0</div>
								            
							</div>  
						</div>";
					while($row=mysqli_fetch_array($result))
					{ 
					
						echo "
						<div class='col-xs-1'>
							<div class='song-icon'>
								<a href='index.php?show=".$row['ID']."'>
								<img src='images/album/".$row['IMAGE']."' class='img-responsive' >
								<div class='song-caption'>".$row['NAME']."</div>
								<div class='song-caption'>".$row['RATING']."</div>
								</a>            
							</div>  
						</div>";
				
					}
					echo "</div>";
					}
					else
					if(isset($_REQUEST['search']))
					{
						$q=$_REQUEST['search'];
						
						$query = "Select * from players where `search` like '%$q%'";
						$result = mysqli_query($connect, $query);
					
					while($row=mysqli_fetch_array($result))
					{ 
					
						echo "
						<div class='col-xs-1'>
							<div class='song-icon'>
								<a href='index.php?show=".$row['ID']."'>
								<img src='images/album/".$row['IMAGE']."' class='img-responsive' >
								<div class='song-caption'>".$row['NAME']."</div>
								
								</a>            
							</div>  
						</div>";
					}
					}
					else
					if(isset($_SESSION['access'])&&($_SESSION['access'])=='NO')
					{
						$query = "Select * from coach where name='".$_SESSION['logged_in']."'";
						$result = mysqli_query($connect, $query);
						$row=mysqli_fetch_array($result);
						
						$query = "Select * from players where coach='".$row['ID']."'";
						$result = mysqli_query($connect, $query);
					
							while($row=mysqli_fetch_array($result))
							{ 
							
								echo "
								<div class='col-xs-1'>
									<div class='song-icon'>
										<a style='cursor:pointer;' href='index.php?edit=1&id=".$row['ID']."'>
										<img src='images/album/".$row['IMAGE']."' class='img-responsive' >
										<div class='song-caption'>".$row['NAME']."</div>
										<div class='song-caption'>".$row['RATING']."</div>
										</a>            
									</div>  
								</div>";
							}
					}
					else
					{
						$query = "Select * from players";
					$result = mysqli_query($connect, $query);
					
					while($row=mysqli_fetch_array($result))
					{ 
					
						echo "
						<div class='col-xs-1'>
							<div class='song-icon'>
								<a href='index.php?show=".$row['ID']."'>
								<img src='images/album/".$row['IMAGE']."' class='img-responsive' >
								<div class='song-caption'>".$row['NAME']."</div>
								
								</a>            
							</div>  
						</div>";
					}
					}
			?>          
        </div>
        
	</div> 
    
</div>

   
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  >
    <div class="modal-content" style="background-color:#404040; color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">View Player</h4>
      </div>
      <div class="modal-body">
       <?php
	  				$id=$_REQUEST['show'];
	   				$query = "Select * from players where `ID`='$id'";
					$result = mysqli_query($connect, $query);					
					$row=mysqli_fetch_array($result);
					
	   echo"
       	<form class='form-horizontal' style='margin-top:20px;' method='post' action=''>
      		<div class='form-group'>
        		<label for='id' class='col-sm-2 control-label'>ID</label>
                    <div class='col-sm-10'>
                      <input type='text' name='id' class='form-control' placeholder='Song ID' value='".$row['ID']."' readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='name' class='col-sm-2 control-label'>Name</label>
                    <div class='col-sm-10'>
                      <input type='text' name='name' class='form-control'  value='".$row['NAME']."' readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='album' class='col-sm-2 control-label'>Height</label>
                    <div class='col-sm-10'>
                      <input type='text' name='height' class='form-control'  value='".$row['HEIGHT']."'  readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='artist' class='col-sm-2 control-label'>Weight</label>
                    <div class='col-sm-10'>
                      <input type='text' name='weight' class='form-control' value='".$row['WEIGHT']."'  readonly>
                    </div>
      		</div>
      		<div class='form-group'>
        		<label for='genre' class='col-sm-2 control-label'>CATEGORY</label>
                    <div class='col-sm-10'>
                      <input type='text' name='categroy' class='form-control'  value='".$row['CATEGORY']."'  readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='year' class='col-sm-2 control-label'>AGE</label>
                    <div class='col-sm-10'>
                      <input type='text' name='age' class='form-control'  value='".$row['AGE']."' readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='lang' class='col-sm-2 control-label'>rating</label>
                    <div class='col-sm-10'>
                      <input type='text' name='rating' class='form-control' value='".$row['RATING']."' readonly>
                    </div>
      		</div>
            
    	</form>";
		?>
                   
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Buy Now</button>
        
      </div>-->
    </div>
  </div>
</div>
 
    
<?php

if(isset($_REQUEST['flag'])&&($_REQUEST['flag']==1))
{
	echo "<script>alert('Wrong Credentials! Try again!');</script>";
}
if(isset($_REQUEST['flag'])&&($_REQUEST['flag']==2))
{
	echo "<script>alert('Added to Favourite Successfully  !');</script>";
}
if(isset($_REQUEST['flag'])&& $_REQUEST['flag']=="delete")
	{
		echo "<script>$('#myModal').modal('show');</script>";
	}
	if(isset($_REQUEST['buy']))
	{
		echo "<script>alert('Purchase SuccessfulL !');</script>";
	}if(isset($_REQUEST['show']))
	{
		echo "<script>$('#showModal').modal('show');</script>";
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
		if($_REQUEST['success']==55)
		{
			echo "<script>
				alert('password Saved Successfully !');
			</script>";
		}
		if($_REQUEST['success']==53)
		{
			echo "<script>
				alert('rating Saved Successfully !');
			</script>";
		}
	}
	
	
	if(isset($_REQUEST['edit'])&&$_REQUEST['edit']==1)
	{
		echo "<script>
						
						$('#editPlayerCoach').modal('show');
			</script>";
	}

?>

</body>
</html>


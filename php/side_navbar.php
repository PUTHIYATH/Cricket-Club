<div class="side-bar">
<ul class="nav nav-pills nav-stacked">
  <li role="presentation" style="text-align:center;"><a href="index.php"><h3><span class="glyphicon glyphicon-home"></span></h3></a></li>
  <li role="presentation" style="text-align:center;"><a  data-toggle='modal' data-target='#genreModal' style="cursor:pointer;"><h3><span class="glyphicon glyphicon-filter"></span></h3></a></li>
  <li role="presentation" style="text-align:center;"><a  href='index.php?flag=filter' style="cursor:pointer;"><h3><span class="glyphicon glyphicon-tasks"></span></h3></a></li>
 <!-- <li role="presentation" style="text-align:center;"><a data-toggle='modal' data-target='#searchModal' style="cursor:pointer;"><h3><span class="glyphicon glyphicon-search"></span></h3></a></li>-->
  <?php
    
  /* if(isset($_SESSION['logged_in'])&&$_SESSION['access']=="NO")
						{
  echo "<li role='presentation' style='text-align:center;'><a data-toggle='modal' data-target='#favModal' style='cursor:pointer;'><h3><span class='glyphicon glyphicon-heart'></span></h3></a></li>";
						}*/
  ?>
</ul>
</div>


<div class="modal fade" id="genreModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="margin-top:52px;">
    <div class="modal-content" style="background:rgba(0,0,0,.90); color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Select Style</h4>
      </div>
      <div class="modal-body">
       	<div class="row">
       	<?php 
			$query = "Select DISTINCT(CATEGORY) from players";
					$result = mysqli_query($connect, $query);
					
					while($row=mysqli_fetch_array($result))
					{ 
						
					
						echo "
						<div class='col-xs-2'>
							<div class='song-icon'>
								<a href='index.php?search=".$row['CATEGORY']."'>
								<img src='images/genre/".$row['CATEGORY'].".jpg' class='img-responsive' >
								<div class='song-caption'>".$row['CATEGORY']."</div>
								</a>            
							</div>  
						</div>";
					}
		?>
        </div>
                   
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Buy Now</button>
        
      </div>-->
    </div>
  </div>
</div>

<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="margin-top:52px;">
    <div class="modal-content" style="background:rgba(0,0,0,.90); color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Discover</h4>
      </div>
      <div class="modal-body">
      	<div class="row" style="border-bottom:solid 2px #5D5D5D; margin-bottom:5px;"><h4>Search by Language</h4></div>

        <div class="row">
       	<?php 
			$query = "Select DISTINCT(LANG) from songs";
					$result = mysqli_query($connect, $query);
					
					while($row=mysqli_fetch_array($result))
					{ 
						
					
						echo "
						<div class='col-xs-2'>
							<div class='song-icon'>
								<a href='index.php?search=".$row['LANG']."'>
								<!--<img src='images/LANG/".$row['LANG'].".jpg' class='img-responsive' >-->
								<div class='song-caption'>".$row['LANG']."</div>
								</a>            
							</div>  
						</div>";
					}
		?>
        
        </div>
        <div class="row" style="border-bottom:solid 2px #5D5D5D; margin-bottom:5px;"><h4>Search by Album</h4></div>

        <div class="row">
       	<?php 
			$query = "Select DISTINCT(ALBUM) from songs";
					$result = mysqli_query($connect, $query);
					
					while($row=mysqli_fetch_array($result))
					{ 
						
					
						echo "
						<div class='col-xs-2'>
							<div class='song-icon'>
								<a href='index.php?search=".$row['ALBUM']."'>
								<!--<img src='images/ALBUM/".$row['ALBUM'].".jpg' class='img-responsive' >-->
								<div class='song-caption'>".$row['ALBUM']."</div>
								</a>            
							</div>  
						</div>";
					}
		?>
        </div>
        <div class="row" style="border-bottom:solid 2px #5D5D5D;margin-bottom:5px;"><h4>Search by Artist</h4></div>
        <div class="row">
       	<?php 
			$query = "Select DISTINCT(SINGER) from songs";
					$result = mysqli_query($connect, $query);
					
					while($row=mysqli_fetch_array($result))
					{ 
						
					
						echo "
						<div class='col-xs-2'>
							<div class='song-icon'>
								<a href='index.php?search=".$row['SINGER']."'>
								<!--<img src='images/SINGER/".$row['SINGER'].".jpg' class='img-responsive' >-->
								<div class='song-caption'>".$row['SINGER']."</div>
								</a>            
							</div>  
						</div>";
					}
		?>
        </div>
                   
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Buy Now</button>
        
      </div>-->
    </div>
  </div>
</div>

<div class="modal fade" id="favModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="margin-top:52px;">
    <div class="modal-content" style="background:rgba(0,0,0,.90); color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> My Favourites</h4>
      </div>
      <div class="modal-body">
       	<div class="row">
       	<?php 
			$query = "Select * from fav where `EMAIL`='".$_SESSION['logged_in']."'";
					$result = mysqli_query($connect, $query);
					
					while($row=mysqli_fetch_array($result))
					{ 
						$q = "Select * from songs where `ID`='".$row['ID']."'";
						$res = mysqli_query($connect, $q);
						$r=mysqli_fetch_array($res);
					
						echo "
						<div class='col-xs-2'>
							<div class='song-icon'>
								<a href='index.php?song=".$r['ID']."'>
								<img src='images/ALBUM/".$r['ART']."' class='img-responsive' >
								<div class='song-caption'>".$r['NAME']."</div>
								</a>            
							</div>  
						</div>";
					}
		?>
        </div>
                   
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Buy Now</button>
        
      </div>-->
    </div>
  </div>
</div>

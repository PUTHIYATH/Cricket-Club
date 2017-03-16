

<div role="tabpanel" class="row">
<div class="col-md-3">
  <!-- Nav tabs -->
  <ul class="nav nav-stacked nav-tabs" role="tablist" id="myTab">
  	<li role="presentation"><a href="index.php" role="tab">Home</a></li>
    <li role="presentation"><a href="#addPlayer" aria-controls="add" role="tab" data-toggle="tab">Add Player</a></li>
    <li role="presentation"><a href="#managePlayer" aria-controls="user" role="tab" data-toggle="tab">Manage Player</a></li>
    <li role="presentation"><a href="#addCoach" aria-controls="add" role="tab" data-toggle="tab">Add Coach</a></li>
    <li role="presentation"><a href="#manageCoach" aria-controls="user" role="tab" data-toggle="tab">Manage Coach</a></li>
    <!--<li role="presentation"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">Manage User</a></li>-->
    

  </ul>
</div>
<div class="col-md-9">
  <!-- Tab panes -->
  <div class="tab-content" >
    <div role="tabpanel" class="tab-pane fade in active" id="addPlayer" style="background-color:#404040; color:#fff;"> 
    <div class="container-fluid" style="border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc; min-height:550px;">  
    	<div class="contaier-fluid"> 
        <div class="col-lg-3"></div>
        <form class="form-horizontal col-lg-6" style="margin-top:20px;" method="post" action="php/add_player.php">
      		<div class="form-group">
        		<label for="id" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="id" class="form-control" placeholder="ID" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="album" class="col-sm-2 control-label">Height</label>
                    <div class="col-sm-10">
                      <input type="text" name="height" class="form-control" placeholder="Player Height" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="artist" class="col-sm-2 control-label">Weight</label>
                    <div class="col-sm-10">
                      <input type="text" name="weight" class="form-control" placeholder="Player Weight" required>
                    </div>
      		</div>
      		<div class="form-group">
        		<label for="genre" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" name="category" class="form-control" placeholder="Bat/ Bowl" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="year" class="col-sm-2 control-label">AGE</label>
                    <div class="col-sm-10">
                      <input type="text" name="age" class="form-control" placeholder="Player Age" required>
                    </div>
      		</div>
              <div class="form-group">
        		<label for="year" class="col-sm-2 control-label">Rating</label>
                    <div class="col-sm-10">
                      <input type="text" name="rating" class="form-control" placeholder="Player Rating (0-100)" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="year" class="col-sm-2 control-label">Coach</label>
                    <div class="col-sm-10">
                      <select name="coach" class="form-control" required>
                      <?php 
					  	require('connect.php');
						$query="SELECT * FROM `coach`";
						$result= mysqli_query($connect, $query) or die('unable to fetch');
						while($row=mysqli_fetch_array($result))
						{
							echo "<option value='".$row['ID']."'>".$row['NAME']."</option>";
						}
					  ?>
                      </select>
                    </div>
      		</div>
            
            <div class="form-group">
        		<label for="image" class="col-sm-2 control-label">Profile Pic</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" required>
                    </div>
      		</div>
          
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-warning btn-block">Add Player</button>
                </div>
              </div>
    	</form>
        <div class="col-lg-3"></div>
        </div>
        </div>
    </div>
    
    <div role="tabpanel" class="tab-pane fade" id="addCoach" style="background-color:#404040; color:#fff;"> 
    <div class="container-fluid" style="border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc; min-height:550px;">  
    	<div class="contaier-fluid"> 
        <div class="col-lg-3"></div>
        <form class="form-horizontal col-lg-6" style="margin-top:20px;" method="post" action="php/add_coach.php">
      		<div class="form-group">
        		<label for="id" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" name="id" class="form-control" placeholder="ID" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="album" class="col-sm-2 control-label">Experience</label>
                    <div class="col-sm-10">
                      <input type="text" name="exp" class="form-control" placeholder="Experience in years" required>
                    </div>
      		</div>
            
      		<div class="form-group">
        		<label for="genre" class="col-sm-2 control-label">Specialisation</label>
                    <div class="col-sm-10">
                      <input type="text" name="special" class="form-control" placeholder="specializes in..." required>
                    </div>
      		</div>
            
              <div class="form-group">
        		<label for="year" class="col-sm-2 control-label">Rating</label>
                    <div class="col-sm-10">
                      <input type="text" name="rating" class="form-control" placeholder="Coach Rating (0-100)" required>
                    </div>
      		</div>
            
            <div class="form-group">
        		<label for="image" class="col-sm-2 control-label">Profile Pic</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" required>
                    </div>
      		</div>
          
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-warning btn-block">Add Coach</button>
                </div>
              </div>
    	</form>
        <div class="col-lg-3"></div>
        </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="user" style="background-color:#404040; color:#fff;">
    	<div class="container-fluid" style="border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;  min-height:550px;">
    	<div class="contaier-fluid" style="margin-top:20px;"> 
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
        	<table class=" table table-responsive table-hover table-bordered">
            	<tr>
                	<th>Sl No</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                
                <?php
					require('connect.php');
					$query="SELECT * FROM `login`";
					$result= mysqli_query($connect, $query) or die('unable to fetch');
					$i=0;
					while($row=mysqli_fetch_array($result))
					{
						$i++;
						echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$row['EMAIL']."</td>";
						echo "<td><a href='php/delete_user.php?email=".$row['EMAIL']."' class='btn btn-block btn-danger'>REMOVE</a></td>";
						echo "</tr>";
					}
					
				?>
             </table>
        </div>
        <div class="col-lg-2"></div>

        </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="managePlayer" style="background-color:#404040; color:#fff;">
    	<div class="container-fluid" style="border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;  min-height:550px;">
    	<div class="contaier-fluid">
        
        <div class="row" style="margin-top:20px;">
        <?php
					
					$query = "Select * from players";
					$result = mysqli_query($connect, $query);					
					while($row=mysqli_fetch_array($result))
					{ 
					
						echo "
						<div class='col-xs-2'>
							<div class='song-icon'>
								<a style='cursor:pointer;' href='admin.php?edit=1&id=".$row['ID']."'>
									<img src='images/album/".$row['IMAGE']."' class='img-responsive' >
									<div class='song-caption'>".$row['NAME']."</div>
								</a>            
							</div>  
						</div>";
					}
		?>
        </div>

        </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="manageCoach" style="background-color:#404040; color:#fff;">
    	<div class="container-fluid" style="border-left:1px solid #ccc; border-right:1px solid #ccc; border-bottom:1px solid #ccc;  min-height:550px;">
    	<div class="contaier-fluid">
        
        <div class="row" style="margin-top:20px;">
        <?php
					
					$query = "Select * from coach";
					$result = mysqli_query($connect, $query);					
					while($row=mysqli_fetch_array($result))
					{ 
					
						echo "
						<div class='col-xs-2'>
							<div class='song-icon'>
								<a style='cursor:pointer;' href='admin.php?edit=2&id=".$row['ID']."'>
									<img src='images/album/".$row['IMAGE']."' class='img-responsive' >
									<div class='song-caption'>".$row['NAME']."</div>
								</a>            
							</div>  
						</div>";
					}
		?>
        </div>

        </div>
        </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="editCoach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  >
    <div class="modal-content" style="background-color:#404040; color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Coach </h4>
      </div>
      <div class="modal-body">
       <?php
	  				$id=$_REQUEST['id'];
	   				$query = "Select * from coach where `ID`='$id'";
					$result = mysqli_query($connect, $query);					
					$row=mysqli_fetch_array($result);
					
	   echo"
       	<form class='form-horizontal' style='margin-top:20px;' method='post' action='php/save_coach.php'>
      		<div class='form-group'>
        		<label for='id' class='col-sm-2 control-label'>ID</label>
                    <div class='col-sm-10'>
                      <input type='text' name='id' class='form-control' placeholder='Song ID' value='".$row['ID']."' readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='name' class='col-sm-2 control-label'>Name</label>
                    <div class='col-sm-10'>
                      <input type='text' name='name' class='form-control'  value='".$row['NAME']."' required>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='album' class='col-sm-2 control-label'>Experience</label>
                    <div class='col-sm-10'>
                      <input type='text' name='exp' class='form-control'  value='".$row['EXP']."' required>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='artist' class='col-sm-2 control-label'>Specialisation</label>
                    <div class='col-sm-10'>
                      <input type='text' name='special' class='form-control' value='".$row['SPECIAL']."' required>
                    </div>
      		</div>
      		
            <div class='form-group'>
        		<label for='lang' class='col-sm-2 control-label'>rating</label>
                    <div class='col-sm-10'>
                      <input type='text' name='rating' class='form-control' value='".$row['RATING']."' required>
                    </div>
      		</div>
            
          
              <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-10'>
                  <button type='submit' class='btn btn-warning btn-block'>Update Coach</button>
                </div>
              </div>
			  <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-10'>
                  <a href='php/delete_coach.php?id=".$row['ID']."&name=".$row['NAME']."' class='btn btn-danger btn-block'>Delete Coach</a>
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
<div class="modal fade" id="editPlayer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  >
    <div class="modal-content" style="background-color:#404040; color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Player </h4>
      </div>
      <div class="modal-body">
       <?php
	  				$id=$_REQUEST['id'];
	   				$query = "Select * from players where `ID`='$id'";
					$result = mysqli_query($connect, $query);					
					$row=mysqli_fetch_array($result);
					
	   echo"
       	<form class='form-horizontal' style='margin-top:20px;' method='post' action='php/save_player.php'>
      		<div class='form-group'>
        		<label for='id' class='col-sm-2 control-label'>ID</label>
                    <div class='col-sm-10'>
                      <input type='text' name='id' class='form-control' placeholder='Song ID' value='".$row['ID']."' readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='name' class='col-sm-2 control-label'>Name</label>
                    <div class='col-sm-10'>
                      <input type='text' name='name' class='form-control'  value='".$row['NAME']."' required>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='album' class='col-sm-2 control-label'>Height</label>
                    <div class='col-sm-10'>
                      <input type='text' name='height' class='form-control'  value='".$row['HEIGHT']."' required>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='artist' class='col-sm-2 control-label'>Weight</label>
                    <div class='col-sm-10'>
                      <input type='text' name='weight' class='form-control' value='".$row['WEIGHT']."' required>
                    </div>
      		</div>
      		<div class='form-group'>
        		<label for='genre' class='col-sm-2 control-label'>CATEGORY</label>
                    <div class='col-sm-10'>
                      <input type='text' name='category' class='form-control'  value='".$row['CATEGORY']."' required>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='year' class='col-sm-2 control-label'>AGE</label>
                    <div class='col-sm-10'>
                      <input type='text' name='age' class='form-control'  value='".$row['AGE']."' required>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='lang' class='col-sm-2 control-label'>rating</label>
                    <div class='col-sm-10'>
                      <input type='text' name='rating' class='form-control' value='".$row['RATING']."' required>
                    </div>
      		</div>
            
          
              <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-10'>
                  <button type='submit' class='btn btn-warning btn-block'>Update Player</button>
                </div>
              </div>
			  <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-10'>
                  <a href='php/delete_player.php?id=".$row['ID']."' class='btn btn-danger btn-block'>Delete Player</a>
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

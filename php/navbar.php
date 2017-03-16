<?php session_start(); require('connect.php');?>
<script>
function change(name)
{
	var new_pass=window.prompt('enter new password');
	var con_pass=window.prompt('enter confirm password');
	if(new_pass==con_pass)
	{
		window.location="php/change.php?name="+name+"&pass="+new_pass;
	}
	else
	{
		alert('Passwords not matching ! Try again !');
	}
}

</script>
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin.php" style="color:#FD5F17;">Cricket Club</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input id='search' type="text" name="search" class="form-control grey-input" placeholder="Omni-Search Bar">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
      
      <?php 
						if(!isset($_SESSION['logged_in']))
						{
							?>
                            <li>
                            <button type='button' class='btn btn-custom' data-container='body' data-toggle='popover'  data-placement='bottom' style='height:50px; border-radius:0px; margin-right:20px;' data-content="<form action='php/login.php' method='post'><div class='form-group'><input type='text' name='email' class='form-control' placeholder='Email'></div><div class='form-group'><input type='password' name='password' class='form-control' placeholder='Password'></div><div class='form-group'><input type='submit' class='form-control btn btn-block btn-success' value='Log In'></div></form>" data-html='true' data-title='Sign In'>
  Sign In
</button></li>

<!--<li>
                        <button class='btn btn-custom' data-toggle='modal' data-target='#signUpModal' style='height:50px; border-radius:0px;'>
                           Sign Up
                        </button>
                    </li>-->
<?php
						}
						else
						{
							
							$query="SELECT * FROM `user` WHERE `email`='".$_SESSION['logged_in']."'";
							$result= mysqli_query($connect, $query) or die('unable to connect to login DB');
							$row=mysqli_fetch_array($result);
							echo "<li><a>Welcome, ".$row['NAME']." </a></li><li><a href='php/logout.php'>Sign Out</a></li>
							<li><a onclick='change(\"".$row['EMAIL']."\");'>Change Password</a></li>";
						}
				  ?>
      
        
		<li class="disabled">&nbsp;</li>
        <li class="disabled">&nbsp;</li>
        <li class="disabled">&nbsp;</li>
        <li class="disabled">&nbsp;</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<!-- modal for Sign Up -->

<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="margin-top:52px;">
    <div class="modal-content" style="background:rgba(0,0,0,.90); color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Sign Up Form </h4>
      </div>
      <div class="modal-body">
       
       	<form class="form-horizontal" style="margin-top:20px;" method="post" action="php/add_user.php">
      		<div class="form-group">
        		<label for="email" class="col-sm-3 control-label">Email &nbsp;<span class="glyphicon glyphicon-envelope"></span></label>
                    <div class="col-sm-9">
                      <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="password" class="col-sm-3 control-label">Password &nbsp;<span class="glyphicon glyphicon-lock"></span></label>
                    <div class="col-sm-9">
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="name" class="col-sm-3 control-label">Name &nbsp;<span class="glyphicon glyphicon-tag"></span></label>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
      		</div>
            <div class="form-group">
        		<label for="address" class="col-sm-3 control-label">Address &nbsp;<span class="glyphicon glyphicon-home"></span></label>
                    <div class="col-sm-9">
                      <input type="text" name="address" class="form-control" placeholder="Shipping Address" required>
                    </div>
      		</div>
      		<div class="form-group">
        		<label for="contact" class="col-sm-3 control-label">Contact &nbsp;<span class="glyphicon glyphicon-phone"></span></label>
                    <div class="col-sm-9">
                      <input type="text" name="contact" class="form-control" placeholder="Mobile Number" required>
                    </div>
      		</div>
            <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" required> I Agree to all the Terms and Conditions of this Site.
        </label>
      </div>
    </div>
  </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-warning btn-block">Sign Up</button>
                </div>
              </div>
    	</form>
                   
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Buy Now</button>
        
      </div>-->
    </div>
  </div>
</div>


<div class="modal fade" id="editPlayerCoach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  >
    <div class="modal-content" style="background-color:#404040; color:#fff;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Player Rating</h4>
      </div>
      <div class="modal-body">
       <?php
	  				$id=$_REQUEST['id'];
	   				$query = "Select * from players where `ID`='$id'";
					$result = mysqli_query($connect, $query);					
					$row=mysqli_fetch_array($result);
					
	   echo"
       	<form class='form-horizontal' style='margin-top:20px;' method='post' action='php/save_rating.php'>
      		<div class='form-group'>
        		<label for='id' class='col-sm-2 control-label'>ID</label>
                    <div class='col-sm-10'>
                      <input type='text' name='id' class='form-control' placeholder='Song ID' value='".$row['ID']."' readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='name' class='col-sm-2 control-label'>Name</label>
                    <div class='col-sm-10'>
                      <input type='text' name='name' class='form-control'  value='".$row['NAME']."' required readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='album' class='col-sm-2 control-label'>Height</label>
                    <div class='col-sm-10'>
                      <input type='text' name='height' class='form-control'  value='".$row['HEIGHT']."' required readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='artist' class='col-sm-2 control-label'>Weight</label>
                    <div class='col-sm-10'>
                      <input type='text' name='weight' class='form-control' value='".$row['WEIGHT']."' required readonly>
                    </div>
      		</div>
      		<div class='form-group'>
        		<label for='genre' class='col-sm-2 control-label'>CATEGORY</label>
                    <div class='col-sm-10'>
                      <input type='text' name='category' class='form-control'  value='".$row['CATEGORY']."' required readonly>
                    </div>
      		</div>
            <div class='form-group'>
        		<label for='year' class='col-sm-2 control-label'>AGE</label>
                    <div class='col-sm-10'>
                      <input type='text' name='age' class='form-control'  value='".$row['AGE']."' required readonly>
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
			  
    	</form>";
		?>
                   
      </div>
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Buy Now</button>
        
      </div>-->
    </div>
  </div>
</div>
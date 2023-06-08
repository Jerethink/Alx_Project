<?php 
session_start();
?>




<?php include "header.php" ?>




<?php 
include("database/connect.php");
$msg ='';
if($_POST){
	$query= "SELECT * FROM admin Where user_name=? AND password=?";
	$user_name = $_POST["user_name"];
	$password = $_POST["password"];
	
	$result = $connection->prepare($query);
	$result->execute([$user_name,$password]);
	
	$admin = $result->fetchAll();

		if(count($admin)>0){
       $_SESSION['admin'] = $user_name;
      header("location:admin/adminpanel.php");
      
	}else{
		$msg = "Invalid Username or password";
  }
}
?>


<br>
<br>
</div class= "everything" >
<h2 style="text-align: center; color: black; " >Login As An Admin</h2><br><br>
<form method="post">
<?php
		if($msg){ ?>
			
			<div style="color:black; font-size:20px; text-align:center">
			<?php echo $msg ?>
		
		<?php } ?>
	


<div class="container"style="color: black;" >
    <div class="row">
        <div class="col-md-5">
        <div class="row" style="width: 150%";>
         <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Username</label>
    <div class="col-sm-10">
    <input type="text"  class="form-control form-control-lg" id="colFormLabelLg" placeholder="" required  name="user_name">
    </div>
    </div>


     <div class="row" style="width: 150%";>
       <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
       <div class="col-sm-10">
        <input type="password"  class="form-control form-control-lg" id="colFormLabelLg" placeholder="****************************************" required name="password">
       </div>
   </div><br>
    
<div>
<button type="submit" class="btn btn-primary">Admin Login</button>
</div>
        </div>

        </div>
         
      
      </div>
  
    </div>

</div>
</div>

   
</form> <br><br> <br>
<?php include "footer.php" ?>
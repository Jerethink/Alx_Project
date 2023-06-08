<?php include "database/connect.php"; ?>
<?php include "header.php" ?>

 <?php   

$sql= "INSERT INTO users(first_name,last_name,email,password,date_of_birth) values(?,?,?,?,?)";

    if ($_POST){
    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $date_of_birth= $_POST["date_of_birth"];
    $students= $connection->prepare($sql);
 
 
 
 
$workon= $students->execute([$first_name,$last_name,$email,$password,$date_of_birth]);
    if($workon) {
        echo "Your registration was suscessful !!!"."<br>";
        
        header("location:login.php");

        
    } else{
        echo "Data was not admitted into the database";

    }
}   

?>












<body>
<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
      
      </div>
  
    </div>

</div>


<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
      
      </div>
  
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
      
      </div>
  
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
      
      </div>
  
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-5">
        <br>
<h2>  Sign Up Form</h2><br>

<form method="post">
  <div class="mb-3" style="width: 60%">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="first_name">
    </div>
    
    <div class="mb-3" style="width: 60%">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="last_name">
    </div>
  


    <div class="mb-3" style="width: 60%">
    <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date_of_birth">
    </div>

    <div class="mb-3" style="width: 60%">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>

    
  <div class="mb-3" style="width: 60%">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>




  <button type="submit" class="btn btn-success">Submit</button> <a href= "login.php"><h6>Have an account already ? login</h6></a>

        </div>
         
      
      </div>
  
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
      
      </div>
  
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
      
      </div>
  
    </div>

</div>


</form>
</body>
</html>





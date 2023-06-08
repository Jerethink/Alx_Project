<?php 
session_start();
if(isset($_SESSION['admin'])){ ?> 
 
 <?php } else{
        
        header("location:../adminlogin.php");//line 1-8 set the login seesion here
      } ?>


<?php 

include("../database/connect.php");
?>


<?php 

if ($_POST){


  $target_dir = "../products/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["images"]["tmp_name"]);
if($check !== false) {
  echo "File is an image - " . $check["mime"] . ".";
  $uploadOk = 1;
} else {
  echo "File is not an image.";
  $uploadOk = 0;
}
}

// Check if file already exists
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}

// Check file size
if ($_FILES["images"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}


if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( basename( $_FILES["images"]["name"])). " has been uploaded.";
  

}
}
  
 
  
  
  


?>



<?php

$sql= "INSERT INTO adverts(images,title,body,date_created) values(?,?,?,?)";

$errors= [];

    if ($_POST){
    
    $title= $_POST["title"];
    $description= $_POST["body"];
    $date_created= date('F-j-Y H:i:s');
    $images= $_FILES["images"]["name"];
    $products= $connection->prepare($sql);
  
    ?>
    

 <?php // $connection above is from the imported file using the include statement
    $workon= $products->execute([$images,$title,$description,$price]); ?>
 <?php   if($workon) {
       echo "You added an item suscessfully !!!"."<br>";
       header("location:adminpanel.php");

        
    } else{
        echo "Item was not admitted into the database";

    }
}   



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
    <link rel="stylesheet"  href="style.css">
  </head>
<body style="background-color:;" >
<hr>

<h1> Administrator</h1>
<hr>

<form method="post" enctype="multipart/form-data">





<div class="form-control" >
  <div class="member" ><br><br><br>
     <label>Upload image</label><br>
    <input type="file"   name="images">

  </div><br><br><br>
  <div class="member">
  <label>Title</label>
     <input type="text" name="title" required>
  
   </div>

  <div class="member"><br><br><br>
  <label>Description</label>
    <textarea type="text"  name="body"></textarea>
  </div><br>

  
  
  <div class="post">
  <button type="submit" class="btn btn-success">Post Adverts</button>
  
  </div>
  
  
</div>

</form> 








<div class="container">
    <div class="row">
        <div class="col-md-5">


             
             
    
  
               

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
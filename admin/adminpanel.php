<?php 
session_start();
if(isset($_SESSION['admin'])){ ?> 
 
 <?php } else{
        
        header("location:../adminlogin.php");
      } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>

<link rel="stylesheet"  href="style.css">

</head>
<body>
<hr>

<a href="../index.php" ><h1> Administrator</h1></a>
<hr>


<div class="container">
	<div class="first">
		<a href="add.php" ><h3>Add Article</h3></a>

	</div>
    
	<div class="second" >
		<a href="students.php"><h3> View Students</h3></a>
	</div>

	<div class="third" >
		<a href="manage.php"><h3>Manage Adverts </h3></a>

	</div>


</div>


</body>
</html>
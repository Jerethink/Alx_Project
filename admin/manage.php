<?php 
session_start();
if(isset($_SESSION['admin'])){ ?> 
 
 <?php } else{
        
        header("location:../adminlogin.php");
      } ?>

<?php 

include "../database/connect.php"; 

$sql= "SELECT * FROM adverts ORDER BY id DESC ";

      $result = $connection->prepare($sql);
      $result->execute();
      $outcome = $result->fetchAll(pdo::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
    <link rel="stylesheet"  href="style.css">
    
</head>
<body>

<h1> Welcome Administrator </h1> <br> <br> <br>
<hr class="border border-danger border-2 opacity-50">
<div class="head">
<a  href="add.php"  class="btn  btn-success">Advertise</a>&nbsp &nbsp &nbsp&nbsp 
<a  href="students.php"  class="btn  btn-success">View Registered members</a>&nbsp &nbsp &nbsp&nbsp
<a  href="add.php"  class="btn  btn-success">Post Article</a>&nbsp &nbsp &nbsp&nbsp
</div>
<hr class="border border-danger border-2 opacity-50">


<table class="table">

  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col"></th>
      
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
   
  <?php  foreach($outcome as $i => $display): ?> 
    <tr>
      <th scope="row"><?php $i +1 ?> </th>
      <td></td>
      <td><?php  echo $display['title'] ?></td>
      <td><?php  //echo $display['price'] ?></td>
      
      <td>
      <?php echo "<td><a  href='edit.php?id=".$display['id']."'>Edit</a>"; ?>

     <?php echo "<td><a class='btn btn-sm btn-danger' href='delete.php?id=".$display['id']."'>Delete</a>"; ?>

      </td>

      
      
    </tr>


    <?php endforeach; //another method for writing foreach most especially with HTML ?>
 

  </tbody>
</table>










</body>
</html>


<?php 
session_start();
if(isset($_SESSION['admin'])){ ?> 
 
 <?php } else{
        
        header("location:../adminlogin.php");
      } ?>



<?php 
include "../database/connect.php"; 

$sql= "SELECT * FROM users ORDER BY id DESC";

      $result = $connection->prepare($sql);
      $result->execute();
      $outcome = $result->fetchAll(pdo::FETCH_ASSOC);


?>




<h1> Welcome Administrator </h1> <br> <br> <br>
<h4> Registered Members </h4> <br> 


<table class="table">

  <thead>
    <tr>
    
      <th scope="col"></th>
      <th scope="col"></th>
      
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">email</th>
      
      
      
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
   
  <?php  foreach($outcome as $i => $display): ?> 
    <tr>
      <th scope="row"><?php $i +1 ?> </th>
      <td></td>
      <td><?php  echo $display['first_name'] ?></td>
      <td><?php  echo $display['last_name'] ?></td>
      <td><?php  echo $display['email'] ?></td>
      
      
      <td>
      
     <?php echo "<td><a class='btn btn-sm btn-danger' href='deleteuser.php?id=".$display['id']."'>Delete</a>"; ?>

<!--<button type="button" class="btn btn-sm btn-danger">Delete</button> -->
      </td>

      
      
    </tr>


    <?php endforeach;  ?>
 

  </tbody>
</table>









</body>
</html>
<?php 
session_start();
if(isset($_SESSION['admin'])){ ?> 
 
 <?php } else{
        
        header("location:adminlogin.php");  } ?>



<?php 

try{

    include("../database/connect.php");
    
    $id =$_GET['id']; 
    $sql= "DELETE FROM users where id ='$id'";

     $action= $connection->prepare($sql);
     $action->execute();
     
     echo "Student deleted successfully";
     header("location:students.php");
    }catch (PDOException $e) {
        echo $sql ."<br>". $e->getMessage();

    }
?>
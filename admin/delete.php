<?php 

try{

    include("../database/connect.php");
    //include("logic.php");
    $id =$_GET['id']; //we set a variable to obtain unique data.
    $sql= "DELETE FROM adverts where id ='$id'";

     $action= $connection->prepare($sql);
     $action->execute();
     
     echo "Product deleted successfully";
     header("location:manage.php");
    }catch (PDOException $e) {
        echo $sql ."<br>". $e->getMessage();

    }
?>
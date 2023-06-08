<?php include "../header.php" ?>
<?php 
$id = $_GET["id"];

try{ include("../database/connect.php");
    $select = "SELECT * FROM adverts WHERE id=? limit 1";
    $result= $connection->prepare($select);
    $result->execute([$id]);

   
    if($_POST){
    $sql= "UPDATE adverts SET images=?,title=?,body=? WHERE id =? LIMIT 1";
        
     $action= $connection->prepare($sql);
     $images= $_POST["images"];
     $title= $_POST["title"];
     $body= $_POST["body"];
     
     $action->execute([$images,$title,$body,$id]);
     echo "Advert updated successfully";
     header("location:adminpanel.php");
    }
 
    }catch (PDOException $e) {
        echo $sql ."<br>". $e->getMessage();

    }
?>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar" style="background-color: skyblue;" >
  

<div class="container-fluid">
  <form class="d-flex" role="search">
  <script src="script.js"></script>

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    <a class="navbar-brand" style="color:white;" >JerryThinks</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div style="margin-left: 320px;"  class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">view visitors</a>
        </li>
          
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="home.php">Carts</a>
        </li> 
        
        </li>
        
        
      </ul>
      </div>
</div>
  </div>
</nav>

 <?php foreach($result as $res){ ?>   
    <form method= "post">
<div class="form_control">
<h1>Please Edit your preffered details </h1>
 
  <div >
  	<label><strong>Product Image</strong>:</label><input type="file" value="<?=$res['images']?>" name="images">
  </div> 
  <div class= "form-group">
  	<label><strong>Title:</strong></label><input type="text" value="<?=$res['title']?>" name="title">
  </div>
  <div class="form_group">
  	<label><strong>Description:</strong></label> <input type="text" value="<?=$res['body']?>" name="body">
  </div>
    <?php } ?>
  <div class="btn btn-primary">
  <button class="btn btn-primary">Update</button>
  </div>
</form>
</div>

<?php "../footer.php" ?>

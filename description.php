<?php include "header.php"; 
include "database/connect.php"; 

?>

<body>
<br> 
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  

  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_5.jpg');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
          <marquee behavior="" direction="">     <h1 class="mb-4">You have what it takes ? Apply now !!! </h1> </marquee>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/img_2_vertical.jpg" alt="Image" class="img-fluid"></figure>
              <span class="d-inline-block mt-1">By Jerry </span>
              <span>&nbsp;-&nbsp; May 30, 2023</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br> <br> <br> <br> <br> <br>



  <?php 
 
$id =$_GET['id'];

$sql= "SELECT * FROM adverts where id ='$id' ";

      $result = $connection->prepare($sql);
      $result->execute();
      $outcome = $result->fetchAll(pdo::FETCH_ASSOC);
      ?>
      <?php  foreach($outcome as $i => $display): ?>
            <div class="project_box ">
                     <div class="dark_white_bg" ><img style="item-align: center; margin-left:400px; " src="products/<?php echo $display['images']; ?>" width="50%" ></div><br>
                    
                     <h1 style="margin-left:200px;" ><?php  echo $display['title'] ?> </h1>
                  </div>
                  
     <h4 style="margin-left:100px;" ><?php  echo $display["body"]; ?></h4> .<br>
      
      


      <?php endforeach; ?>
 <br>
 <br>
 <br>
 
 
      
      







 <br> <br> <br> <br> <br> <br>

  <?php include 'footer.php'; ?>
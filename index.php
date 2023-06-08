<?php 

include "database/connect.php"; 
include "header.php";

$sql= "SELECT * FROM adverts ORDER BY id DESC";

      $result = $connection->prepare($sql);
      $result->execute();
      $outcome = $result->fetchAll(pdo::FETCH_ASSOC);

?>


<!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4"><?php foreach($outcome as $i => $display):  ?>
					<a href="description.php?id=<?php echo $display['id']?>" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" ><img src="products/<?php echo $display['images'];?>"></div>

						<div class="text">
							<span class="date"><?php  echo $display['date_created'] ?></span>
							<h2><?php  echo $display['title'] ?></h2>
						</div>
					</a> <?php endforeach; ?>

					
				</div>
				
									</div>
			</div>
		</div>
	</section>
	<br> <br>
	<hr>				
	<?php include 'footer.php'; ?>
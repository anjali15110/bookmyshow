<?php

	include "admin/conn/conn.php";
	
	$query = '';
	
	if(isset($_GET['min']) & isset($_GET['max'])){
		$min = $_GET['min']; 
		$max = $_GET['max'];
		$query = "AND price >= ".$min." AND price <= ".$max."";
	}
	
		$id = $_GET['category'];
		//echo '<br /> ';
		//echo $id;
		$sqllist = "select * from events where category = ".$id." ".$query." ";
		//echo $sqllist;
		$querylist = mysqli_query($conn, $sqllist);
		//print_r($querylist);

	$querycatname = "select * from category where id = '".$id."'";
	$sqlcatname = mysqli_query($conn, $querycatname);
	$datacatname = mysqli_fetch_assoc($sqlcatname);
	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "include/header_script.php";?>
	</head>
	<body style="background:#f5f5f5;">
		<?php include "include/header.php";?>
		
		<section>
				<?php
					$sql2 = "select * from events where category = '".$id."'  ORDER BY id DESC LIMIT 0,3";
					$query2 = mysqli_query($conn, $sql2);
				?>
	
			<div class="owl-carousel owl-theme" id="slider">
				<?php
					 
					while($row2 = mysqli_fetch_assoc($query2)){
				?>	
					<div class="item">
						<a href="detail_show.php?eid=<?php echo $row2['id']; ?>">
							<div class="mt-2 main">
								<img src="<?php echo 'admin/images/event_detail/'.$row2['detail_image'] ?>" height="100%"/>
							</div>
						</a>
					</div>
				<?php
					}
				?>
			</div>
		</section>
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div>
							<h3 class="my-3">Filters</h3>
								<div class="filters">
									<details style="margin-bottom:20px;">
										<summary class="summary">Date</summary>
										<div class="filter">
											<a class="btn">Today</a>
											<a class="btn">Tomorrow</a>
											<a class="btn">This Weekend</a>
										</div>
									</details>
									<details style="margin-bottom:20px;">
										<summary class="summary">Language</summary>
										<div class="filter">
											<a class="btn">English</a>
											<a class="btn">Hindi</a>
											<a class="btn">Punjabi</a>
											<a class="btn">Bengali</a>
											<a class="btn">Urdu</a>
											<a class="btn">Telegu</a>
										</div>
									</details>
									<details style="margin-bottom:20px;">
										<summary class="summary">Categories</summary>
										<div class="filter">
											<?php 
												$querycat = "select * from category";
												$sqlcat = mysqli_query($conn, $querycat);
												//print_r($sqlcat);
											?>
											<?php 
												while($datacat = mysqli_fetch_assoc($sqlcat)){
											?>
											<a class="btn" href="list_show.php?category=<?php echo  $datacat['id']; ?>"><?php echo $datacat['category']; ?></a>
											<?php
												}
											?>
										</div>
									</details>
									<details style="margin-bottom:20px;">
										<summary class="summary">More Filter</summary>
										<div class="filter">
											<a class="btn">Online Streaming</a>
											<a class="btn">Outdoor Events</a>
											<a class="btn">Kids Allowed</a>
											<a class="btn">Amatuar</a>
											<a class="btn">Kids Activites</a>
										</div>
									</details>
									<details style="margin-bottom:20px;">
										<summary class="summary">Price</summary>
										<div class="filter">
											<a class="btn" href="list_show.php?category=<?php echo  $datacatname['id']; ?>&min=0&max=0">Free</a>
											<a class="btn" href="list_show.php?category=<?php echo  $datacatname['id']; ?>&min=0&max=500">0 - 500</a>
											<a class="btn" href="list_show.php?category=<?php echo  $datacatname['id']; ?>&min=501&max=2000">501 - 2000</a>
											<a class="btn" href="list_show.php?category=<?php echo  $datacatname['id']; ?>&min=<?php echo 2000 ?>&max=<?php echo 10000 ?>">Above 2000</a>
										</div>
									</details>
									<div class="venue"><a>Browse by Venues</a></div>
								</div>
						</div>
					</div>
						
					<div class="col-sm-9">
						<div>
							<h3 class="my-3">Events In Delhi-NCR</h3>
								<div>
									<?php 
										$querycat = "select * from category";
										$sqlcat = mysqli_query($conn, $querycat);
										//print_r($sqlcat);
									?>
									<div class="nav">
										<ul class="my-3">
											<?php 
												while($datacat = mysqli_fetch_assoc($sqlcat)){
											?>
												<li><a class=" btn catbuttons py-1 m-1" href="list_show.php?category=<?php echo $datacat['id'];?>"><?php echo $datacat['category']; ?></a></li>
											<?php
												}
											?>
										</ul>
									</div>
								</div>
							<div class="row">
								<?php		 
									while($datalist = mysqli_fetch_assoc($querylist)){
									//print_r($datalist);
								?>	
									<div class="col-md-3 col-sm-4 col-6">
										<div class="listimage mx-1">
											<a class="lists" href="detail_show.php?eid=<?php echo $datalist['id']; ?>" ><img src="<?php echo 'admin/images/event_list/'.$datalist['list_image'] ?>"/>
											<h5 class="mt-3 px-1"><?php echo $datalist['event_name'] ?></h5>
											<p class="my-0 px-1"><?php echo $datacatname['category'] ?></p>
											<span class="px-1"><i class="fa-solid fa-indian-rupee-sign" style="col-6"></i> <?php echo $datalist['price'] ?>  onwards</span>
											</a>
										</div>
									</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		
		<div class="bg-light mt-3">
			<div class="container">
				<div class="py-3 px-3 mb-2">
					<p class="my-0"><a href="index.php#link" id="top">HOME</a></p>
				</div>
			</div>
		</div>
		
		
		
		<?php include "include/footer.php";?>
		<?php include "include/footer_script.php";?>
		
		<script>
			$('#slider').owlCarousel({
				stagePadding: 50,
				loop:true,
				autoplay:true,
				autoplayTimeout:3000,
				margin:10,
				nav:true,
				navText:['<i class="fa-solid fa-angle-left fa-lg"></i></i>','<i class="fa-solid fa-angle-right fa-lg"></i>'],
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
		</script>
	</body>
</html>
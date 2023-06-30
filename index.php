<?php  include "admin/conn/conn.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "include/header_script.php";?>
	</head>
	<body>
	
		<?php include "include/header.php";?>
		
		<section>
				<?php
					$sql1 = "select * from events ORDER BY id DESC LIMIT 0,3";
					$query1 = mysqli_query($conn, $sql1);
				?>
	
			<div class="owl-carousel owl-theme" id="mainslider">
				<?php
					 
					while($row1 = mysqli_fetch_assoc($query1)){
				?>	
					<div class="item">
						<a href="detail_show.php?eid=<?php echo $row1['id']; ?>">
							<div class="mt-2 main">
								<img src="<?php echo 'admin/images/event_detail/'.$row1['detail_image'] ?>" height="100%"/>
							</div>
						</a>
					</div>
				<?php
					}
				?>
			</div>
		</section>
		
		<section class="section_two">
			<div class="container">
				<div class="event_heading mt-3">
					<h3 class="my-2">Comedy Shows</h3>
					<?php
						$queryall = "select * from category where id = 1";
						$sqlall = mysqli_query($conn, $queryall);
					?>
					<?php
						while($dataall = mysqli_fetch_assoc($sqlall)){
					?>
						<a href="list_show.php?category=<?php echo $dataall['id'];?>"><p>See All ></p></a>
					<?php
						}
					?>
				</div>
				<?php
					$sql = "select * from events where category = 1  ORDER BY id DESC LIMIT 0,10";
					$query = mysqli_query($conn, $sql);
				?>
	
				<div class="owl-carousel owl-theme" id="comedyslider">
					<?php 
						while($row = mysqli_fetch_assoc($query)){
					?>	
						<div class="item">
							<a href="detail_show.php?eid=<?php echo $row['id']; ?>"><div class="images">
								<img src="<?php echo 'admin/images/event_list/'.$row['list_image'] ?>" />
								<h4 class="mt-2 px-1"><?php echo $row['event_name'] ?></h4>
								<p class="my-0 px-1">Comedy Shows</p>
							</div></a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		
		<section class="section_three">
			<div class="container">
				<div class="event_heading mt-3">
					<h3 class="my-2">Laughter Therapy</h3>
					<?php
						$queryall = "select * from category where id = 6";
						$sqlall = mysqli_query($conn, $queryall);
					?>
					<?php
						while($dataall = mysqli_fetch_assoc($sqlall)){
					?>
						<a href="list_show.php?category=<?php echo $dataall['id'];?>"><p>See All ></p></a>
					<?php
						}
					?>
				</div>
				<?php
					$sqla = "select * from events where category = 6 ORDER BY id DESC LIMIT 0,10";
					$querya = mysqli_query($conn, $sqla);
				?>
	
				<div class="owl-carousel owl-theme" id="musicslider">
					<?php
						 
						while($rowa = mysqli_fetch_assoc($querya)){
					?>	

						<div class="item">
							<a href="detail_show.php?eid=<?php echo $rowa['id']; ?>"><div class="images">
								<img src="<?php echo 'admin/images/event_list/'.$rowa['list_image'] ?>" />
								<h4 class="mt-2 px-1"><?php echo $rowa['event_name'] ?></h4>
								<p class="my-0 px-1">Laughter Therapy</p>
							</div></a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		
		<section>
			<div class="container">
				<div style="margin-bottom:80px; margin-top:20px;">
					<img src="images/stream-leadin-web-collection-202210241242.avif" width="100%" height="100%"/>
				</div>
			</div>
		</section>
		
		<section class="section_five" style="margin-bottom:80px!important">
			<div class="container">
			<h3 class="mt-3">The Best Of Live Events</h3>
				<?php
					$sqlc = "select * from category where id in(1,5,6,8,11)";
					$queryc = mysqli_query($conn, $sqlc);
				?>
	
				<div class="owl-carousel owl-theme" id="kidsslider">
					<?php
						 
						while($rowc = mysqli_fetch_assoc($queryc)){
					?>	
						<div class="item">
							<div class="category">
								<img src="<?php echo 'admin/images/category/'.$rowc['image'] ?>" />
								<h4 class="mt-2 px-1"><?php echo $rowc['event_name'] ?></h4>
								<p class="my-0 px-1">The Best Of Live Events</p>
							</div>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		
		<section class="section_six mb-5">
			<div class="container">
				<div class="event_heading mt-5">
					<h3 class="my-2 pb-5 pt-4 text-light">Online Streaming Events</h3>
				</div>
				<?php
					$sqle = "select * from events where category = 10  ORDER BY id DESC LIMIT 0,10";
					$querye = mysqli_query($conn, $sqle);
				?>
	
				<div class="owl-carousel owl-theme" id="onlineslider">
					<?php
						 
						while($rowe = mysqli_fetch_assoc($querye)){
					?>	
						<div class="item">
							<a href="detail_show.php?eid=<?php echo $rowe['id']; ?>"><div class="images">
								<img src="<?php echo 'admin/images/event_list/'.$rowe['list_image'] ?>" />
								<h4 class="mt-2 px-1 text-light"><?php echo $rowe['event_name'] ?></h4>
								<p class="my-0 px-1 pb-4 text-light">Online Streaming Events</p>
							</div></a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		
		<section class="section_seven">
			<div class="container">
				<div class="event_heading mt-5">
					<h3 class="my-2">Exibitions</h3>
					<?php
						$queryall = "select * from category where id = 4";
						$sqlall = mysqli_query($conn, $queryall);
					?>
					<?php
						while($dataall = mysqli_fetch_assoc($sqlall)){
					?>
						<a href="list_show.php?category=<?php echo $dataall['id'];?>"><p>See All ></p></a>
					<?php
						}
					?>
				</div>
				<?php
					$sqlb = "select * from events where category = 4  ORDER BY id DESC LIMIT 0,10";
					$queryb = mysqli_query($conn, $sqlb);
				?>
	
				<div class="owl-carousel owl-theme" id="exibitionslider">
					<?php
						 
						while($rowb = mysqli_fetch_assoc($queryb)){
					?>	
						<div class="item">
							<a href="detail_show.php?eid=<?php echo $rowb['id']; ?>"><div class="images">
								<img src="<?php echo 'admin/images/event_list/'.$rowb['list_image'] ?>" />
								<h4 class="mt-2 px-1"><?php echo $rowb['event_name'] ?></h4>
								<p class="my-0 px-1">Exibitions</p>
							</div></a>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</section>
		
		<section class="section_eight">
			<div class="container">
				<div class="event_heading mt-3">
					<h3 class="my-2">Kids</h3>
					<?php
						$queryall = "select * from category where id = 5";
						$sqlall = mysqli_query($conn, $queryall);
					?>
					<?php
						while($dataall = mysqli_fetch_assoc($sqlall)){
					?>
						<a href="list_show.php?category=<?php echo $dataall['id'];?>"><p>See All ></p></a>
					<?php
						}
					?>
				</div>
				<?php
					$sqld = "select * from events where category = 5 ORDER BY id DESC LIMIT 0,10";
					$queryd = mysqli_query($conn, $sqld);
				?>
	
				<div class="owl-carousel owl-theme" id="kidsslider">
					<?php
						 
						while($rowd = mysqli_fetch_assoc($queryd)){
					?>	
						<div class="item">
							<a href="detail_show.php?eid=<?php echo $rowd['id']; ?>"><div class="images">
								<img src="<?php echo 'admin/images/event_list/'.$rowd['list_image'] ?>" />
								<h4 class="mt-2 px-1"><?php echo $rowd['event_name'] ?></h4>
								<p class="my-0 px-1">Kids</p>
							</div></a>
						</div>
					<?php
						}
					?>
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
			// $("#search").on("keyup", function() {
				// var value = $(this).val().toLowerCase();
				// $("#myTable tr").filter(function() {
				  // $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				// });
			// });
		
			$('#mainslider').owlCarousel({
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
			
			
			$('#musicslider, #comedyslider, #exibitionslider, #kidsslider, #onlineslider').owlCarousel({
				stagePadding: 0,
				loop:true,
				autoplay:false,
				autoplayTimeout:0,
				margin:25,
				nav:true,
				navText:['<i class="fa-solid fa-angle-left fa-lg"></i></i>','<i class="fa-solid fa-angle-right fa-lg"></i>'],
				responsive:{
					0:{
						items:2
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			});
			
		</script>
	</body>
</html>

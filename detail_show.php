<?php
	include "admin/conn/conn.php";
	
	// --get event id from list page--
	$id2 = $_GET['eid'];
	$sqldetail = "select * from events where id = '".$id2."'";
	$querydetail = mysqli_query($conn, $sqldetail);
	$detail = mysqli_fetch_assoc($querydetail);
	//print_r ($detail);
	
	// --artist show--
	// echo '<pre>';
	// print_r($detail['artist_id']);
	// echo '</pre>';
	$sqlartist = "select * from artist where id IN (".$detail['artist_id'].")";
	$queryartist = mysqli_query($conn, $sqlartist);
	//print_r ($queryartist);
	
	// --event's suggestion--
	$suggestevent = $detail['category'];
	//print_r ($suggestevent);
	$sqllist = "select * from events where category = '".$suggestevent."'";
	//echo $sqllist;
	$querylist = mysqli_query($conn, $sqllist);
	//print_r($querylist);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "include/header_script.php";?>
	</head>
	<body style="background: rgb(242, 242, 242);">
		<?php include "include/header.php";?>
		
			<section>
				<div class="containers">
					<div style="position:relative; background-image:url(<?php echo 'admin/images/event_detail/'.$detail['detail_image']; ?>) ">
						<div class="overlap"></div>
						<div class="detailimage">
							<img src="<?php echo 'admin/images/event_detail/'.$detail['detail_image'] ?>"/>
						</div>
					</div>
					<div class="bg-light" style="position:sticky; top:0; z-index:999;
">
						<div class="details">
							<div class="row mx-0">
								<div class="col-12 col-sm-8">
									<h3><?php echo $detail['event_name'] ?></h3>
								</div>
								<div class="col-4 col-sm-4">
									<?php
										if($user_id == null){
									?>
									<div style="text-align:right" class="mt-1">
										<a href="signin.php"><button class=" btn btn-lg btn-danger book float-right">Book</button></a>
									</div>
									<?php
										}else{
									?>
									<div style="text-align:right" class="mt-1">
										<a href="booking.php?eventid=<?php echo $detail['id'];?>"><button class=" btn btn-lg btn-danger book float-right">Book</button></a>
									</div>
									
									<?php
										}
									?>
								</div>
								
								<div class="col-4 col-sm-6">
									<div class="">
										<p><?php echo $detail['event_date'] ?></p>
									</div>
								</div>
								<div class="col-4 col-sm-6">
									<div style="text-align:right" class="mt-2 detailrupess">
										<p><i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $detail['price'] ?> onwards</p>
									</div>
								</div>
							</div>		
						</div>
					</div>
					
					<div class="row mt-4 mx-0">
						<div class="col-md-3">
						<?php 
							if($queryartist){
						?>
							<div class="bgartist bg-light">
								<h5>Artist</h5>
								<div class="artimage">
									<div class="row">
									<?php
										while($artistdata = mysqli_fetch_assoc($queryartist)){
									?>
										<div class="col-md-6">
											<div class="artist_image">
												<a href="artist.php.?artist=<?php echo $artistdata['id']; ?>"><img src="<?php echo 'admin/images/artist/'.$artistdata['artist_image'] ?>"/></a>
											</div>
										</div>
										<div class="col-md-6">
											<div class="artistname">
											<p><?php echo $artistdata['artist_name'] ?></p>
											</div>
										</div>
									<?php
										}
									?>
									</div>	
								</div>
							</div>
						<?php
							}
						?>
						<div class="bg-light py-3 px-3">
							<h5>Share this event</h5>
							<span style="margin-right:15px;"><i class="fa-brands fa-facebook-f"></i></span>
							<i class="fa-brands fa-twitter"></i>
						</div>
						</div>
						<div class="col-md-6">
							<div class="bg-light">
							<div class="py-3 px-3" style="border-bottom: 23px solid #f2f2f2;">
								<h5>Click on Interested to stay updated about this event.</h5>
								<i class="fa-solid fa-thumbs-up" style="font-size:23px; font-weight:900; color:#30b530; margin-right:10px;"></i><span>28304</span>
								<button class="btn mt-4" style="color:#cd1324; border: 1px solid #cd1324; padding: 5px 30px; float:right;">Interested?</button>
								<p style="font-size:10px; font-size:13px; font-family:sans-serif;" class="mt-2">People have shown interest <br>recently</p>
							</div>
								<div class="detailpara mt-3">
									<div>
										<h5>ABOUT</h5>
										<p><?php echo $detail['description'] ?> </p>
									</div>
									<div>
										<h5>Terms & Conditions</h5>
										<p><?php echo $detail['features'] ?> </p>
									</div>
									<div>
										<h5>You may also like</h5>
										<div class="owl-carousel owl-theme" id="suggestslider">
											<?php
												 
												while($sameevent = mysqli_fetch_assoc($querylist)){
											?>	
												<div class="item">
													<a href="detail_show.php?eid=<?php echo $sameevent['id']; ?>">
														<div class="mt-2 suggest">
															<img src="<?php echo 'admin/images/event_list/'.$sameevent['list_image'] ?>" height="100%"/>
															<p class="mt-2 px-1">
															<?php 
															$len = strlen($sameevent['event_name']);
															
															if($len > 15){
																echo substr($sameevent['event_name'],0,15).' ...';
															} else {
																echo $sameevent['event_name'];
															}
															
															?></p>
														</div>
													</a>
												</div>
											<?php
												}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div>
							
							</div>
						</div>
					</div>	
				</div>
			</section>
			
			<section class="privacy-section">
				<div class="container">
					<div class="privacy">
						<h6>Privacy Note</h6>
						<p>By using www.bookmyshow.com(our website), you are fully accepting the Privacy Policy available at <a href="privacy.php">bookmyshow.com/privacy</a> governing your access to Bookmyshow and provision of services by Bookmyshow to you. If you do not accept terms mentioned in the <a href="privacy.php">Privacy Policy</a>, you must not share any of your personal information and immediately exit Bookmyshow.</p>
					</div>
				</div>
			</section>

		
		<?php include "include/footer.php";?>
		<?php include "include/footer_script.php";?>
		
		<script>
			$('#suggestslider').owlCarousel({
				stagePadding: 0,
				loop:false,
				autoplay:false,
				autoplayTimeout:0,
				margin:25,
				nav:true,
				// navText:['<i class="fa-solid fa-arrow-left"></i>','<i class="fa-solid fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:3
					},
					600:{
						items:3
					},
					1000:{
						items:4
					}
				}
			});
		</script>
	</body>
</html>
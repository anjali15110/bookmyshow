<?php
	include "admin/conn/conn.php";
	
	$art = $_GET['artist'];
	$sqlart = "select * from artist where id = '".$art."'";
	$queryart = mysqli_query($conn, $sqlart);
	$artdata = mysqli_fetch_assoc($queryart);
	//print_r ($artdata);
	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "include/header_script.php";?>
	</head>
	<body>
		<?php include "include/header.php";?>
		
			<section style=" background:#1a1a1a">
				<div class="container">
					<div class="artist">
						<div class="art_length">
							<div class="row mx-0">
								<div class="col-md-3">
									<div>
										<img src="<?php echo 'admin/images/artist/'.$artdata['artist_image'] ?>"/>
									</div>
								</div>
								<div class="col-md-9">
									<div class="text-light artist_detail">
										<h1 style="font-size:36px; font-weight:bold;"><?php echo $artdata['artist_name'] ?></h1>
										<ul class="artistoccupation">
											<li style="color:#c1c1c1;">Occupation:</li>
											<li class="text-light"><?php echo $artdata['occupation'] ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>				
			</section>
			
			<section>
				<div class="container">
					<div class="aboutpara">
						<h3>About</h3>
						<p><?php echo $artdata['about'] ?></p>
					</div>	
				</div>
			</section>
		
		<?php include "include/footer.php";?>
		<?php include "include/footer_script.php";?>
		
	</body>
</html>

<?php

	include 'admin/conn/conn.php';
	
	$ticket = $_GET['ticket'];
	//echo $ticket;
	$ticketsql = "select * from booking_table where id = '".$ticket."'";
	$ticketquery = mysqli_query($conn, $ticketsql);
	$ticketfetch = mysqli_fetch_assoc($ticketquery);
	$event_id = $ticketfetch['event_id'];
	//echo $event_id;
	 
	$joins = "select * from events where id = '".$event_id."'";
	$querys = mysqli_query($conn, $joins);
	$arrays = mysqli_fetch_assoc($querys);
	//print_r($arrays['artist_id']);
	$category = $arrays['category'];
	//print_r($category);
	
	$joincategory = "select category from category where id = '".$category."'";
	$queryscategory = mysqli_query($conn, $joincategory);
	$fetchcategory = mysqli_fetch_assoc($queryscategory);
	//print_r ($fetchcategory);

	$allartist = "select * from artist where id IN (".$arrays['artist_id'].") Limit 1";
	//echo $allartist;
	$allartistquery = mysqli_query($conn, $allartist);
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "include/header_script.php";?>
		<link rel="stylesheet" href="css/ticket_css.css" />
	</head>
	<body>

	<div class="ticket">
	<div class="left">
		<div class="image"> 
			<img src="<?php echo 'admin/images/event_list/' .$arrays['list_image'] ?>"/>
		</div>
		<div class="ticket-info">
			
			<div class="price pb-2">
				<p class="mb-0">Price: <?php echo $arrays['price'] ?></p>
				<div class="row px-5">
					<div class="col-md-6">
						<span class=""></span><span>Quantity: <?php echo $ticketfetch['quantity'] ?>&nbsp; </span>
					</div>
					<div class="col-md-6">
						<span class=""></span><span> &nbsp; Total Price: <?php echo $ticketfetch['total_price'] ?></span>
					</div>
				</div>
			</div>
			
			<div class="show-name">
				<h1><?php echo $ticketfetch['event_name'] ?></h1>
			</div>
			
			<p class="location"><span>Seat name</span>
				<span class="separator"></span><span><?php echo $ticketfetch['seat'] ?></span>
			</p>
		</div>
	</div>
	<div class="right">
		<div class="">
		<?php 
			if($allartistquery){
		?>
		<?php
			$artistdata = mysqli_fetch_assoc($allartistquery);
		?>
			<div>
				<div class="show-name text-center">
					<h1 class="my-3">Artist Name</h1>
				</div>
				<div class="artistimage text-center">
					<img src="<?php echo 'admin/images/artist/'.$artistdata['artist_image'] ?>"/>
				</div>
				<div class="time">
					<p><?php echo $artistdata['artist_name'] ?></p>
				</div>
			</div>
		<?php
			}
		?>
			<div class="time">
				<p><?php echo $arrays['event_date'] ?></p>
			</div>
			<div class="text-center">
				<p><?php echo $fetchcategory['category'] ?></p>
			</div>

		</div>
	</div>
</div>

<div  onClick="window.print()" class="download">
	<p class="btn">Download</p>
</div>

	<?php include "include/footer_script.php";?>
	</body>
</html>

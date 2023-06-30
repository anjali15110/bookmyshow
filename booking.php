<!DOCTYPE html>
	
<html lang="en" dir="ltr">
	<head>
		<?php include "include/header_script.php";?>
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />-->
		<style>
		/* fallback */
		@font-face {
		  font-family: 'Material Symbols Outlined';
		  font-style: normal;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/materialsymbolsoutlined/v110/kJF1BvYX7BgnkSrUwT8OhrdQw4oELdPIeeII9v6oDMzByHX9rA6RzaxHMPdY43zj-jCxv3fzvRNU22ZXGJpEpjC_1n-q_4MrImHCIJIZrDCvHOej.woff2) format('woff2');
		}

		.material-symbols-outlined {
		  font-family: 'Material Symbols Outlined';
		  font-weight: normal;
		  font-style: normal;
		  font-size: 24px;
		  line-height: 1;
		  letter-spacing: normal;
		  text-transform: none;
		  display: inline-block;
		  white-space: nowrap;
		  word-wrap: normal;
		  direction: ltr;
		  -webkit-font-feature-settings: 'liga';
		  -webkit-font-smoothing: antialiased;
		}
		</style>
	</head>
	<body style="background:#f5f5f5;">
	<?php include "include/header.php";?>
	
<?php
	include "admin/conn/conn.php";
	//session_start();
	
	$userid = $_SESSION['front_user'];
	//print_r($_SESSION['front_user']);
	
	
	$seatid = $_GET['eventid'];

	$seatsql = 'select * from events where id = "'.$seatid.'"';
	$seatquery = mysqli_query($conn,$seatsql);
	$seatfetch = mysqli_fetch_array($seatquery);
	$tprice = $seatfetch['price'];
	//echo $tprice;
	
	$registersql = 'select * from user_table where id = "'.$userid.'"';
	$registerquery = mysqli_query($conn,$registersql);
	$registerfetch = mysqli_fetch_array($registerquery);

	$bookingsql = 'select seat,id from booking_table where event_id='.$seatid;
	$bookingquery = mysqli_query($conn,$bookingsql);
	

	
	?>

	
	
		<section class="background" style="background-image: url('images/light.jpg')">
			<div style=" text-align:center; padding-top:20px;">
				<div class="row mx-0">
					<div class="col-8">
						<div class="row">
						<?php 
							$totalseatbook = '';
							while($bookingfetch = mysqli_fetch_assoc($bookingquery)){
								//print_r($bookingfetch);
								$totalseatbook = $totalseatbook.$bookingfetch['seat'].','; 
							}	
							$totalarr = explode(',', $totalseatbook);
							//print_r($totalarr);
							
							$arrone = ['A', 'B', 'C', 'D', 'E'];
							$arrtwo = [1, 2, 3, 4, 5, 6, 7, 8, 9,10,11,12];
							//print_r(Count($arrone));
							for($i=0; $i<Count($arrone); $i++){
								for($j=0; $j < Count($arrtwo); $j++){
									$itemone = $arrone[$i];
									$itemtwo = $arrtwo[$j];
									//print($itemone.$itemtwo);
									$inarr = in_array($itemone.$itemtwo, $totalarr);
									
									?>
									
										<div class="col-md-1">
											<div class="selectbtn">
												<input  <?php echo $inarr ? 'disabled' : '' ?> type="checkbox" name="seat[]" value="<?php echo $itemone.$itemtwo ?>" class="hideclass" />
												<button <?php echo $inarr ? 'disabled' : '' ?> class="clickhandler"></button>
											</div>
										</div>
									<?php
								}		
							}	
						?>
						</div>
						<div class="screen mb-4"></div>
					</div>
					<div class="col-md-4">
						<div class="about">Username: &ensp;<?php echo $registerfetch['name']?></div>
						<div class="about">Eventname: &ensp;<?php echo $seatfetch['event_name']?></div>
						<div class="conform"><button class="btn text-light confirm">Book Ticket</button></div>
					</div>
				</div>
			</div>
		</section>					
		
		<?php include "include/footer.php";?>
		<?php include "include/footer_script.php";?>
		<script>
			$(document).ready(function(){
				var seats_str = '';
				
				$(".clickhandler").click(function(){
					var el = $(this).parents('.selectbtn').find('input[type="checkbox"]');
					
					if($(el).is(':checked')){
						$(el).attr('checked', false);
						var splitval = seats_str.split(',');
						var newarr = splitval.filter(item => item != $(el).val());
						seats_str = newarr.join(',')
					} else {
						$(el).attr('checked', true);
						
						console.log(seats_str);
					}
					
					if($(el).is(':checked')){
						$(this).css("background","#c4272e");
					}else{
						$(this).css("background","#f0f0f0");
					}
					
					
					//$(el).attr('checked', false);
						
					//console.log(el);
						seats_str = $.map($(':checkbox[name=seat\\[\\]]:checked'), function(n, i){
						return n.value;
						}).join(',');
						//console.clear();
						//console.log(seats_str);
						
						
					});
				
			
				$(".confirm").click(function(){
					
					var quantity = total_price;
					var seatbook = seats_str;
					var eventid = "<?php echo $seatfetch['id']?>";
					var username = "<?php echo $registerfetch['id']?>";
					var eventname = "<?php echo $seatfetch['event_name']?>";
					var quantity = (seats_str.split(',').length);
						//console.log(quantity);
					var tprice = <?php echo $tprice ?>;
					var totalprice = Number(tprice);
						console.log(totalprice);
					var total_price = quantity * totalprice;
						console.log(total_price);

					var obj = 
					{
						user : username,
						id : eventid,
						eventname : eventname,
						sbook : seatbook,
						price : total_price,
						quantity : quantity,
					}
					
					console.log(obj);
							
					$.ajax({
						type : 'POST',
						url : 'admin/ajax/seatbooking.php',
						data : obj,
						success : function(resp){
							if(resp != 'error'){
								
								//console.log(resp);
								 window.location.href = 'ticket.php?ticket=' + resp;
							}
							console.log(resp);
							}
						});
						
					});
				
				});
		</script>
	</body>
</html>
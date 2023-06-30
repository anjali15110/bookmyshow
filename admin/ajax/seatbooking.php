<?php
	include "../conn/conn.php";

	$username = $_POST['user'];
	$eventid = $_POST['id'];
	$eventname = $_POST['eventname'];
	$seat = $_POST['sbook'];
	$tprice = $_POST['price'];
	$quantity = $_POST['quantity'];
	$date = date('Y-m-d');


	$sql = "insert into booking_table (id, user_id, event_id, event_name, seat, total_price, quantity, status, createddate)value('', '".$username."', '".$eventid."', '".$eventname."', '".$seat."', '".$tprice."', '".$quantity."', '1', '".$date."')";
	$query = mysqli_query($conn, $sql);
	if($query == 1){
		$last_id = mysqli_insert_id($conn);
		//print_r();
		echo $last_id;
	}
	else{
		echo 'error';
	}	
		
	
?>
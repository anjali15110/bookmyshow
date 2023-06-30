<?php
	include "../conn/conn.php";
	
	$category = $_POST['category'];
	$filename = $_POST['filename'];
	$eventname = $_POST['event_name'];
	$eventdate = $_POST['event_date'];
	$price = $_POST['price'];
	$detailimage = $_POST['detail_image'];
	$description = $_POST['description'];
	$features = $_POST['features'];
	$artist = $_POST['artist'];
	$art = implode(',',$artist);
	$date = date('Y-m-d');
	$action = $_POST['action'];
	
	
	if($action == "insert"){
	$sql = "insert into events(id, category, list_image, event_name, event_date, price, detail_image, description, features, createddate, status, artist_id)value('', '".$category."', '".$filename."', '".$eventname."', '".$eventdate."', '".$price."', '".$detailimage."', '".$description."', '".$features."', '".$date."', '1','".$art."')";
	
	//echo $sql;

	$query = mysqli_query($conn, $sql);
	
		if($query == 1){
			echo 'success';
		}
		else{
			echo 'error';
		}
	}
	
	if($action == "update"){
		$id = $_POST['id'];
		$sql = "update events set category='".$category."', list_image='".$filename."', event_name='".$eventname."', event_date='".$eventdate."', price='".$price."', detail_image='".$detailimage."', description='".$description."', features='".$features."', artist_id='".$art."'  where id = '".$id."'";
	
	//echo $sql;
	
		$query = mysqli_query($conn, $sql);
	
			 if($query == 1){
				 echo 'success';
			 }
			 else{
				 echo 'error';
			 }
	}
	
	
?>
<?php

	include "../conn/conn.php";
	
	$artfilename = $_POST['artfilename'];
	$artistname = $_POST['artistname'];
	$occupation = $_POST['occupation'];
	$about = $_POST['about'];
	$date = date('Y-m-d');
	$action = $_POST['action'];
	
	if($action == "insert")
	{
		$sql = "insert into artist (id, artist_image, artist_name, occupation, about, createddate, status)values('', '".$artfilename."', '".$artistname."', '".$occupation."', '".$about."', '".$date."', '1')";
	
		$query = mysqli_query($conn, $sql);
		//echo $query;
		if($query == 1){
				echo 'success';
			}
			else{
				echo 'error';
			}
	}
	
	if($action == "update")
	{
		$id = $_POST['id'];
		$sql = "update artist set artist_image='".$artfilename."', artist_name='".$artistname."', occupation='".$occupation."', about='".$about."' where id = '".$id."'";
		
		$query = mysqli_query($conn, $sql);
		if($query == 1){
				echo 'success';
			}
			else{
				echo 'error';
			}
	}
?>
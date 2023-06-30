<?php
	$imagefile = $_FILES['imagefile'];
	$filename = $_POST['filename'];
	$tempname = $imagefile['tmp_name'];
	
	if($filename == ''){
		$date = date('Y-m-d');
		$rand = rand(1000,9999);
		$filename = 'event_detail-'.$date.'-'.$rand.'.jpg';
	}

	$upload = move_uploaded_file($tempname, '../images/event_detail/'.$filename);
	
	echo $filename;
?>
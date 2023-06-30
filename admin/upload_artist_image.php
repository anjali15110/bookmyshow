<?php
	$imagefile = $_FILES['imagefile'];
	$filename = $_POST['artfilename'];
	$tempname = $imagefile['tmp_name'];
	if($filename == '')
	{
		$date = date('Y-m-d');
		$random = rand(1000,9999);
		$filename = 'artist-'.$date.'-'.$random.'.jpg';
	}
	$upload = move_uploaded_file($tempname, 'images/artist/'.$filename);
	
	echo $filename;
?>
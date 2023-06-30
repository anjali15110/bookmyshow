<?php
	include "../conn/conn.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$password = $_POST['password'];
	$date = date('Y-m-d');
	$action = $_POST['action'];
	
	//echo $name;
	
	if($action == "registration"){
	$sql = "insert into front_registeration(id, name, email, phone, city, state, pincode, password, status, createddate)value('', '".$name."', '".$email."', '".$phone."', '".$city."', '".$state."', '".$pincode."', '".$password."', '1', '".$date."')";
	
	$query = mysqli_query($conn, $sql);
	
	if($query == 1){
		echo "success";
	}else{
		echo "error";
	}
	
	}
	
	
?>
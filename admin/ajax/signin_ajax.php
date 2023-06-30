<?php
	include "../conn/conn.php";
	session_start();
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//echo $email;

		$usersql = "select * from user_table where email='".$email."' AND password='".$password."'";
	$userquery = mysqli_query($conn, $usersql);

	
	if($userquery->num_rows > 0){
		$row = mysqli_fetch_assoc($userquery);
		$_SESSION['front_user'] = $row['id'];
		echo 1;
	}else{
		echo 2;
	}
	

?>
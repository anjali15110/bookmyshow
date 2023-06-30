<?php

	session_start();
	
	if(!isset($_SESSION['token']) || $_SESSION['token'] == ''){
		header("Location: login.php");
	}
	
	include "conn/conn.php";
	
	$id = null;
	$data = null;
	
	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	$sql = "select * from user_table where id = '$id'";
	$query = mysqli_query($conn, $sql);
	//print_r($query);
	$data = mysqli_fetch_array($query);
	//print_r($data);
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	<?php include "include/header_script.php";?>
	</head>

  <body class="navbar-fixed sidebar-fixed" id="body">
    
    <div class="wrapper">
      <?php include "include/sidenav.php";?>

		<div class="page-wrapper">
			<?php include "include/topnav.php";?>
 
			<div class="content-wrapper">
				<div class="card card-default mx-auto my-auto py-4 px-4" style="margin:40px auto!important; width:80%;">
					<div class="card-header">
						<h1>User Form</h1>
						<a class="btn text-light float-right" href="user_registration_table.php" style="width:fit-content; background:#9e6de2; display:flex; place-self:flex-end">View List</a>

					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-xl-6">
								<div class="mb-5">
									<label class="text-dark font-weight-medium" for="list">Name</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control bg-light" id="name" value="<?php echo $data != null ? $data['name'] : '' ?>">
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="mb-5">
									<label class="text-dark font-weight-medium" for="list">Email</label>
									<div class="input-group mb-3">
										<input type="email" class="form-control bg-light" id="email" value="<?php echo $data != null ? $data['email'] : '' ?>">
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="mb-5">
									<label class="text-dark font-weight-medium" for="list">Phone</label>
									<div class="input-group mb-3">
										<input type="number" class="form-control bg-light" id="phone" value="<?php echo $data != null ? $data['phone'] : '' ?>">
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="mb-5">
									<label class="text-dark font-weight-medium" for="list">City</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control bg-light" id="city" value="<?php echo $data != null ? $data['city'] : '' ?>">
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="mb-5">
									<label class="text-dark font-weight-medium" for="list">State</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control bg-light" id="state" value="<?php echo $data != null ? $data['state'] : '' ?>">
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="mb-5">
									<label class="text-dark font-weight-medium" for="list">Pincode</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control bg-light" id="pincode" value="<?php echo $data != null ? $data['pincode'] : '' ?>">
									</div>
								</div>
							</div>
							
							<div class="col-xl-12">
								<div class="mb-5">
									<label class="text-dark font-weight-medium" for="list">Password</label>
									<div class="input-group mb-3">
										<input type="password" class="form-control bg-light" id="password" value="<?php echo $data != null ? $data['password'] : '' ?>">
									</div>
								</div>
							</div>
							
							<?php
								if($data){
							?>
								<button type="submit" class="btn btn-success btn-pill" id="update">Update</button>
							<?php
								}else{
							?>
								<button type="submit" class="btn btn-success btn-pill" id="submit">Submit</button>
							<?php
								}
							?>
						</div>
					</div>
					
				</div>
				
				<footer class="footer mt-auto text-center">
					<div class="copyright bg-white">
					  <p>
						&copy; <span id="copy-year"></span> Copyright Web Developer by <a class="text-primary" href="#" target="_blank" >Kashyap</a>.
					  </p>
					</div>
				</footer>
			  
			</div>
		</div>
    </div>
    
        <?php include "include/footer_script.php";?>
		
		<script>
			$(document).ready(function(){
				$('#submit').click(function(){
					var name = $('#name').val();
					var email = $('#email').val();
					var phone = $('#phone').val();
					var city = $('#city').val();
					var state = $('#state').val();
					var pincode = $('#pincode').val();
					var password = $('#password').val();
					
					//console.log(name);
					
					var obj = {
						name : name,
						email : email,
						phone : phone,
						city : city,
						state : state,
						pincode : pincode,
						password : password,
						action : 'insert'
					}
					//console.log(obj);
					
					$.ajax({
						type : "POST",
						url : "ajax/user_registration_ajax.php",
						data : obj,
						success : function(response)
						{
							if(response == 'success'){
								console.log('successfull');
								location.reload();
							}else{
								console.log('error');	
							} 
						}
					})
					
				})
				
				$('#update').click(function(){
					var id = '<?php echo $id ?>';
					var name = $('#name').val();
					var email = $('#email').val();
					var phone = $('#phone').val();
					var city = $('#city').val();
					var state = $('#state').val();
					var pincode = $('#pincode').val();
					var password = $('#password').val();
					
					//console.log(name);
					
					var obj = {
						id : id,
						name : name,
						email : email,
						phone : phone,
						city : city,
						state : state,
						pincode : pincode,
						password : password,
						action : 'update'
					}
					//console.log(obj);
					
					$.ajax({
						type : "POST",
						url : "ajax/user_registration_ajax.php",
						data : obj,
						success : function(response)
						{
							if(response == 'success'){
								console.log('successfull');
							}else{
								console.log('error');	
							} 
						}
					})
					
				})
			});
		</script>
		
	</body>
</html>

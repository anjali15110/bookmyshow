<?php
	
	session_start();
	
	if( !isset($_SESSION['token']) || $_SESSION['token'] == ''){
		header("Location: login.php");
	}

	include "conn/conn.php";
	
	$sql = "select * from user_table";
	$query = mysqli_query($conn, $sql);
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
				<div class="card-header" style="background:transparent; overflow-x:scroll;">
					<div>
						<h1>User List</h1>
						<a class="btn text-light float-right" href="user_registration.php"  style="width:fit-content; background:#9e6de2; margin-top:-38px; margin-bottom:30px;">Add New User</a>
					</div>
					<table id="productsTable" class="table table-hover table-product mb-6" style="width:100%">
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>City</th>
								<th>State</th>
								<th>Pincode</th>
								<th>Created Date</th>
								<th>Status</th>
								<th>Update</th>
							</tr>
							
							<?php
								$count = 1;
								while($data = mysqli_fetch_array($query)){
							?>
								<tr>
									<td><?php echo $count; ?></td>
									<td><?php echo $data['name']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td><?php echo $data['phone']; ?></td>
									<td><?php echo $data['city']; ?></td>
									<td><?php echo $data['state']; ?></td>
									<td><?php echo $data['pincode']; ?></td>
									<td><?php echo $data['createddate']; ?></td>
									<td><?php echo $data['status'] == 1 ? '<a class="btn text-light changecolor" style="background:#9e6de0">Active</a>' : '<a class="btn btn-danger">Dective</a>' ?></td>
									<td><a class="btn btn-info" href="user_registration.php?id=<?php echo $data['id'] ?>">Update</a></td>
								</tr>
							<?php
								$count++;
								}
							?>
					</table>
				</div>
					<footer class="footer mt-auto text-center">
						<div class="copyright bg-white">
							<p>
							&copy; <span id="copy-year"></span> Copyright Web Developer by <a class="text-primary" href="#" target="_blank" >Anjali Kashyap</a>.
							</p>
						</div>
					</footer>		
			</div>
		</div>
    </div>
    
        <?php include "include/footer_script.php";?>
		
	</body>
</html>

<?php
	include "conn/conn.php";

	$sql = "select * from artist";
	$query = mysqli_query($conn, $sql);
	//print_r($query);
	
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
				<h1>Event List</h1>
					<a class="btn text-light float-right" href="artist_form.php"  style="width:fit-content; background:#9e6de2; margin-top:-38px; margin-bottom:30px;">Add New Event</a>
				</div>
					<table id="productsTable" class="table table-hover table-product mb-6" style="width:100%">
						<tr>
							<th>Id</th>
							<th>Artist image</th>
							<th>Artist name</th>
							<th>Occupation</th>
							<th>About</th>
							<th>Created Date</th>
							<th>Status</th>
							<th>Update</th>
							
						</tr>
							<?php
								$count = 1;
								while($data = mysqli_fetch_assoc($query)){
							?>
								<tr>
									<td><?php echo $count; ?></td>
									<td><img src="<?php echo 'images/artist/'.$data['artist_image'] ?>" /></td>
									<td><?php echo $data['artist_name']; ?></td>
									<td><?php echo $data['occupation']; ?></td>
									<td><?php echo substr($data['about'],0,25); ?></td>
									<td><?php echo $data['createddate']; ?></td>
									<td><?php echo $data['status'] == 1 ? '<a class="btn text-light changecolor" style="background:#9e6de0">Active</a>' : '<a class="btn btn-danger">Dective</a>' ?></td>
									<td><a class="btn btn-info" href="artist_form.php?id=<?php echo $data['id'] ?>">Update</a></td>
								</tr>
							<?php
							$count++;							
								}
							?>
						
					</table>
			</div>
         
					<footer class="footer mt-auto">
						<div class="copyright bg-white">
						  <p class="text-center">
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

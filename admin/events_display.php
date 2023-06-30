<?php

	session_start();
	
	if(!isset($_SESSION['token']) || $_SESSION['token'] == ''){
		header("Location: login.php");
	}

	include "conn/conn.php";

	$sql = "select * from events";
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
			<?php 
			include "include/sidenav.php";
			?>
			
		<div class="page-wrapper">
			<?php 
				include "include/topnav.php";
			?>

        <div class="content-wrapper">
		   <div class="card-header" style="background:transparent; overflow-x:scroll;">
				<div>
				<h1>Event List</h1>
					<a class="btn text-light float-right" href="event_form.php"  style="width:fit-content; background:#9e6de2; margin-top:-38px; margin-bottom:30px;">Add New Event</a>
				</div>
					<table id="productsTable" class="table table-hover table-product mb-6" style="width:100%">
						<tr>
							<th>Id</th>
							<th>Category</th>
							<th>Artist Id</th>
							<th>List image</th>
							<th>Event Name</th>
							<th>Event Date</th>
							<th>Price</th>
							<th>Detail Image</th>
							<th>Description</th>
							<th>Features</th>
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
									<td><?php echo $data['category']; ?></td>
									<td><?php echo $data['artist_id']; ?></td>
									<td><img src="<?php echo 'images/event_list/'.$data['list_image'] ?>" style="border: 1px solid grey; height:70px; width:70px; border-radius:50px;"/> </td>
									<td><?php echo $data['event_name']; ?></td>
									<td><?php echo $data['event_date']; ?></td>
									<td><?php echo $data['price']; ?></td>
									<td><?php echo $data['detail_image']; ?></td>
									<td><?php echo substr($data['description'],0,25); ?></td>
									<td><?php echo substr($data['features'],0,25); ?></td>
									<td><?php echo $data['createddate']; ?></td>
									<td><?php echo $data['status'] == 1 ? '<a class="btn text-light changecolor" style="background:#9e6de0">Active</a>' : '<a class="btn btn-danger">Dective</a>' ?></td>
									<td><a class="btn btn-info" href="event_form.php?id=<?php echo $data['id'] ?>">Update</a></td>
								</tr>
							<?php
							$count++;							
								}
							?>
						
					</table>
			</div>
        </div>
		
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p class="text-center">
                &copy; <span id="copy-year"></span> Copyright Web Developer by <a class="text-primary" href="#" >Anjali Kashyap</a>.
              </p>
            </div>
          </footer>
		  

      </div>
    </div>
    
                   


	<?php 
		include "include/footer_script.php";
	?>


  </body>
</html>

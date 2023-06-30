<?php
	include "conn/conn.php";
	
	//$id = $_GET['id'];
	//echo $id;

	$id = null;
	$row = null;

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "select * from artist where id = '".$id."'";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
		//print_r($row);
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
					
					<div class="card card-default mx-auto my-auto py-4 px-4" style="margin-top:0; width:80%;">
						<div class="card-header">
							<h1>Enter Your Artist Name</h1>
							<a class="btn text-light float-right" href="artist_table.php" style="width:fit-content; background:#9e6de2; display:flex; place-self:flex-end">View List</a>
						</div>
						
						<div class="card-body">
							<div class="row">
								<div class="col-xl-6">
									<div class="mb-5">
									<?php
										if($row){
									?>
										<div id="showimg" style="width:100px; height:100px;"><img src="<?php echo 'images/artist/'.$row['artist_image']; ?>" style="width:100%; height:100%;"/></div>
									<?php
										}else{
									?>
										<div id="showimg"></div>
									<?php
										}
									?>
										<label class="text-dark font-weight-medium" for="event_date">Artist Image</label>
										<div class="input-group mb-3">
											<input type="file" class="form-control bg-light"  id="artistimage" value="<?php echo $row != null ? $row['artist_image'] : '' ?>">
										</div>
											<input type="hidden" class="form-control bg-light"  id="artfilename" value="<?php echo $row != null ? $row['artist_image'] : '' ?>">
									</div>
								</div>
								
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="event_date">Artist Name</label>
										<div class="input-group mb-3">
											<input type="text" class="form-control bg-light"  id="artistname" value="<?php echo $row != null ? $row['artist_name'] : '' ?>">
										</div>
									</div>
								</div>
								
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="event_date">Occupation</label>
										<div class="input-group mb-3">
											<input type="text" class="form-control bg-light"  id="occupation" value="<?php echo $row != null ? $row['occupation'] : '' ?>">
										</div>
									</div>
								</div>
								
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="event_date">About</label>
										<div class="input-group mb-3">
											<input type="text" class="form-control bg-light"  id="about" value="<?php echo $row != null ? $row['about'] : '' ?>">
										</div>
									</div>
								</div>
							</div>
					
							<div class="form-footer">
							<?php
								if($row){
							?>
								<button type="submit" class="btn btn-secondary btn-pill update">Update</button>
							<?php
								}else{
							?>
								 <button type="submit" class="btn btn-secondary btn-pill submit">Submit</button>
							<?php
								}
							?>
							</div>
						</div>
					</div>
		  
					<footer class="footer mt-auto">
						<div class="copyright bg-white">
						  <p class="text-center">
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
				$("#artistimage").change(function(){
					var filename = $("#artfilename").val();
					var file = $(this)[0].files[0];
					//console.log(file);
					var formdata = new FormData();
					//console.log(formdata);
					formdata.append('imagefile', file);
					formdata.append('artfilename', filename);
					
					$.ajax({
						type : "POST",
						url : "upload_artist_image.php",
						data : formdata,
						processData: false,
						contentType: false,
						success : function(resp){
							if(resp != ''){
								var path = 'images/artist/'+resp;
								$artfilename = $('#artfilename').val(resp);
								$("#showimg").html('<img src="'+path+'" width="100px" height="100px"/>');
							}
						}
					})
				});
			
				$(".submit").click(function(){
					var artfilename = $("#artfilename").val();
					var artistname = $("#artistname").val();
					var occupation = $("#occupation").val();
					var about = $("#about").val();
					
					var obj = {
						artfilename : artfilename,
						artistname : artistname,
						occupation : occupation,
						about : about,
						action : "insert"
					}
					
					$.ajax({
						type : "POST",
						url : "ajax/artist_ajax.php",
						data : obj,
						success : function(response)
						{
							if(response == 'success'){
								console.log("successfull");
							}else{
								console.log("error");
							}
						}
					})
					
				});
				
				$(".update").click(function(){
					var artfilename = $("#artfilename").val();
					var artistname = $("#artistname").val();
					var occupation = $("#occupation").val();
					var about = $("#about").val();
					var id = '<?php echo $id ?>';
					
					var obj = {
						artfilename : artfilename,
						artistname : artistname,
						occupation : occupation,
						about : about,
						id : id,
						action : "update"
					}
					
					$.ajax({
						type : "POST",
						url : "ajax/artist_ajax.php",
						data : obj,
						success : function(response)
						{
							if(response == 'success'){
								console.log("successfull");
							}else{
								console.log("error");
							}
						}
					})
					
				});
			})
		</script>
	</body>
</html>

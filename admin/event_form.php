<?php

	session_start();
	
	if(!isset($_SESSION['token']) || $_SESSION['token'] == ''){
		header("Location: login.php");
	}

	include "conn/conn.php";
	
	$id = null;
	$data = null;
	
	if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "select * from events  where id = '$id'";
	$query = mysqli_query($conn, $sql);
	//print_r($query);
	$data = mysqli_fetch_assoc($query);
	// print_r($data);
	}
	
	$artist = ' select * from artist';
	$art_query = mysqli_query($conn, $artist);
	
	$catquery = "select id, category from category";
	$run = mysqli_query($conn, $catquery);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "include/header_script.php";?>
		<link href="css/multiselect.css" rel="stylesheet"/>
     <script src="js/multiselect.min.js"></script>
	</head>

	<body class="navbar-fixed sidebar-fixed" id="body" >
		<div class="wrapper">
			<?php include "include/sidenav.php";?>

			<div class="page-wrapper">
				<?php include "include/topnav.php";?>
   
				<div class="content-wrapper">
					<div class="card card-default mx-auto my-5 py-4 px-4" style="margin-top:0; width:90%;">
						<div class="card-header">
							<h1>Event Management Form</h1>
							<a class="btn text-light float-right" href="events_display.php" style="width:fit-content; background:#9e6de2; display:flex; place-self:flex-end">View List</a>
						</div>
				
						<div class="card-body">
							<div class="row">
							
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="list">Category</label>
										<div class="input-group mb-3">
											<select class="form-control bg-light" id="category">
												<option value="">---Select Category---</option>
												<?php
													while($row = mysqli_fetch_assoc($run)){
														$select = $row['id'] == $data['category'] ? true : false;
												?>
													<option value="<?php echo $row['id']?>" <?php echo $select ? 'selected' : '' ?>> <?php echo $row['category']; ?></option>
												<?php
													}
												?>
											</select>
										</div>
									</div>
								</div>
								
								<div class="col-xl-6">
								<label class="text-dark font-weight-medium" for="list">Artist id</label>
									<select class="form-control" data-mdb-placeholder="Example placeholder" id="multiselect_checkbox" multiple name="author[]" >
										<?php
										while($art_array = mysqli_fetch_array($art_query))
										{
											
										?>
										<option value="<?php echo $art_array['id']?>" <?php echo $select ? $select : '' ?>> <?php echo $art_array['artist_name']?> </option>
										<?php
										}
										?>
									</select>
								</div>
								
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium"for="event_name">Event Name</label>
										<div class="input-group mb-3">
											<input type="text" class="form-control bg-light"  id="event_name" value="<?php echo $data != null ? $data['event_name'] : '' ?>">
										</div>
									</div>
								</div>
								
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="event_date">Event Date</label>
										<div class="input-group mb-3">
											<input type="date" class="form-control bg-light"  id="event_date" value="<?php echo $data != null ? $data['event_date'] : '' ?>">
										</div>
									</div>
								</div>
								
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="price">Price</label>
										<div class="input-group mb-3">
											<input type="number" class="form-control bg-light"  id="price" value="<?php echo $data != null ? $data['price'] : '' ?>">
										</div>
									</div>
								</div>
								

								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="list_image">List Image</label>
										<?php
										if($data){
										?>
											<div id="showimg" style="width:100px; height:100px;"><img src="<?php echo 'images/event_list/'.$data['list_image']; ?>"  style="width:100%; height:100%;"/></div>
										<?php	
										}else{
										?>
											<div id="showimg"></div>
										<?php	
										}
										?>
										
										<div class="input-group mb-3">
											<input type="file" class="form-control bg-light"  id="list_image" value="<?php echo $data != null ? $data['list_image'] : '' ?>">
										</div>
										<input type="hidden" class="form-control-file" id="filename"  value="<?php echo $data != null ? $data['list_image'] : ''; ?>"/>
									</div>
								</div>
									  
								<div class="col-xl-6">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="detail_image">Detail Image</label>
										<?php
											if($data){
										?>
											<div id="detail_show_image" style="width:100px; height:100px;"><img src="<?php echo 'images/event_detail/'.$data['detail_image']; ?>" style="width:100%; height:100%;"/></div>
										<?php
											}else{
										?>
											<div id="detail_show_image"></div>
										<?php								
											}
										?>
										
										<div class="input-group mb-3">
											<input type="file" class="form-control bg-light"  id="detail_image" value="<?php echo $data != null ? $data['detail_image'] : '' ?>">
										</div>
										<input type="hidden" class="form-control bg-light"  id="detailimage"  value="<?php echo $data != null ? $data['detail_image'] : ''; ?>">
									</div>
								</div>
									  
								<div class="col-xl-12">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="description">Description</label>
										<div class="input-group mb-3">
											<textarea class="bg-light px-3 py-3" style="width:100%; border:none;" rows="6"  id="description"><?php echo $data != null ? $data['description'] : '' ?></textarea>
										</div>
									</div>
								</div>
									  
								<div class="col-xl-12">
									<div class="mb-5">
										<label class="text-dark font-weight-medium" for="features">Features</label>
										<div class="input-group mb-3">
											<textarea class="bg-light px-3 py-3" style="width:100%; border:none;" rows="6"  id="features"><?php echo $data != null ? $data['features'] : '' ?></textarea>
										</div>
									</div>
								</div>
									<?php 
										if($data){	
									?>
										<button type="submit" class="btn btn-secondary btn-pill" id="update">Update</button>
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
								&copy; <span id="copy-year"></span> Copyright Web Developer by <a class="text-primary" href="#" target="_blank" >Anjali Kashyap</a>.
							</p>
						</div>
					</footer>

				</div>
			</div>
		</div>
    
                   
		<?php include "include/footer_script.php";?>
		<script>
			 document.multiselect('#multiselect_checkbox')
				.setCheckBoxClick("checkboxAll", function(target, args) {
				  //console.log("Checkbox 'Select All' was clicked and got value ", args.checked);
				})
				.setCheckBoxClick("1", function(target, args) {
				  //console.log("Checkbox for item with value '1' was clicked and got value ", args.checked);
				});

			  function enable() {
				document.multiselect('#multiselect_checkbox').setIsEnabled(true);
			  }

			  function disable() {
				document.multiselect('#multiselect_checkbox').setIsEnabled(false);
			 }
		</script>
		<script>
		
		
		
		
		
			$(document).ready(function(){
				$("#list_image").change(function(){
					var filename = $("#filename").val();
					//console.log($(this)[0].files[0]);
					var file = $(this)[0].files[0];
					var formdata = new FormData();
					//console.log(formdata);
					formdata.append('imagefile', file);
					formdata.append('filename', filename);
					
					$.ajax({
						type : "POST",
						url : "ajax/upload_event_image.php",
						data : formdata,
						processData: false,
						contentType: false,
						success : function(resp){
							if(resp != ''){
								var path = 'images/event_list/'+resp;
								console.log(path);
								$("#filename").val(resp);
								$("#showimg").html('<img src="'+path+'?v2" width="100px" height="100px" />');
								
							}
						}
					})
				});
				
				$("#detail_image").change(function(){
					var detailimage = $("#detailimage").val();
					var file = $(this)[0].files[0];
					//console.log(file);
					var formdata = new FormData();
					formdata.append('imagefile', file);
					formdata.append('filename', detailimage);
					
					$.ajax({
						type : "POST",
						url : "ajax/upload_detail_image.php",
						data : formdata,
						processData : false,
						contentType : false,
						success : function(resp){
							if(resp != ''){
								$path = 'images/event_detail/'+resp;
								$("#detailimage").val(resp);
								$("#detail_show_image").html('<img src="'+$path+'?v3" width="100px" height="100px" />');
							}
						}
					})
				});
				
				$("#submit").click(function(){
					var category = $("#category").val();
					var filename = $("#filename").val();
					var eventname = $("#event_name").val();
					var eventdate = $("#event_date").val();
					var price = $("#price").val();
					var detailimage = $("#detailimage").val();
					var description = $("#description").val();
					var features = $("#features").val();
					var artist = $("#multiselect_checkbox").val();
					console.log(artist);
					var obj = {
						category : category,
						filename : filename,
						event_name : eventname,
						event_date : eventdate,
						price : price,
						detail_image : detailimage,
						description : description,
						features : features,
						artist : artist,
						action : "insert"
					}

					// console.log(obj);
					
					$.ajax({
					 type : "POST",
					 url : "ajax/event_ajax.php",
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
					
				});
				
				$("#update").click(function(){
					var category = $("#category").val();
					var filename = $("#filename").val();
					var eventname = $("#event_name").val();
					var eventdate = $("#event_date").val();
					var price = $("#price").val();
					var detailimage = $("#detailimage").val();
					var description = $("#description").val();
					var features = $("#features").val();
					var id = '<?php echo $id ?>';
					var artist = $("#multiselect_checkbox").val();
					
					var obj = {
						category : category,
						filename : filename,
						event_name : eventname,
						event_date : eventdate,
						price : price,
						detail_image : detailimage,
						description : description,
						features : features,
						id : id,
						artist : artist,
						action : "update"
					}
					
					// console.log(obj);
					
					$.ajax({
					 type : "POST",
					 url : "ajax/event_ajax.php",
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
					
				});
			});
		</script>
		
	</body>
</html>

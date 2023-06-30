<?php

	session_start();
	
	if(!isset($_SESSION['token']) || $_SESSION['token'] == ''){
		header("Location: login.php");
	}
	
	include "conn/conn.php";

	$id = null;
	$data = null;

	if(isset( $_GET['id'])){
	$id = $_GET['id'];
	$sql = "select * from category where id = '$id'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($query);
	 // echo '<pre>';
	 // print_r ($data);
	// echo '</pre>';

	}

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
					<div class="card card-default mx-auto my-auto py-4 px-4" style="margin-top:0; width:90%;">
						<div class="card-header">
							<h1>Enter Your Category Name</h1>
							<a class="btn text-light float-right" href="category_table.php" style="width:fit-content; background:#9e6de2; display:flex; place-self:flex-end">View List</a>
						</div>
						
						<div class="card-body">
							<div class="form-group">
								<label for="cname">Category Name</label>
								<input type="text" class="form-control rounded-0 bg-light" id="cname" placeholder="Enter Name" value="<?php echo $data != null ? $data['category'] : '' ?>">
							</div>
							<!--start validation cname -->
							<div class="valid"><div id="valid_cname"></div></div>
							<!--end validation cname -->
							  
							<div class="form-group">
								<label for="image">Image</label>
								
								<?php
								if($data){
								?>
									<div id="showimg" class="mb-3" style="width:100px; height:100px;"><img src="<?php echo 'images/category/'.$data['image']; ?>" style="width:100%; height:100%;" /></div>
								<?php	
								}else{
								?>
									<div id="showimg" class="mb-3"></div>
								<?php	
								}
								?>
								
								<input type="file" class="form-control-file" id="image" value="<?php echo $data != null ? $data['image'] : '' ?>">
								<input type="hidden" class="form-control-file" id="filename" value="<?php echo $data != null ? $data['image'] : ''; ?>">
							</div>
							<!--start validation cname -->
							<div class="valid"><div id="valid_image"></div></div>
							<!--end validation cname -->

							<div class="form-footer">
								<?php 
									if($data){	
								?>
									<button type="submit" class="btn btn-secondary btn-pill update">Update</button>
									<button class="btn btn-light btn-pill cancel">Cancel</button>
								<?php
									}else{
								?>
								  <button type="submit" class="btn btn-secondary btn-pill submit">Submit</button>
								  <button class="btn btn-light btn-pill cancel">Cancel</button>
								<?php
									}
								?>
							</div>
						</div>
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
		
    
        <?php 
			include "include/footer_script.php";
		?>
		
		
		<script>
		
		function clear(){
			$("#cname").val('');
			$("#image").val('');
		};
		
			$(document).ready(function(){
				
				$("#image").change(function(){
					var filename = $("#filename").val();
					//console.log($(this));
					
					var file = $(this)[0].files[0];
					
					
					//console.log(file);
					
					var formdata = new FormData();
					formdata.append('imagefile', file);
					formdata.append('filename', filename);
					
					$.ajax({
						type : "POST",
						url : "ajax/uploadimage.php",
						data : formdata,
						processData: false,
						contentType: false,
						success : function(resp)
						{
							//console.log(resp);
							if(resp != ""){
								var path = 'images/category/'+resp;
								console.log(path);
								$('#filename').val(resp);
								$("#showimg").html('<img src="'+path+'?v4" width="100px" height="100px" />');
							}
						} 
					})
					
				});
				
				
				$('.submit').click(function(){
					var category = $('#cname').val();
					var image = $('#filename').val();
					
					console.log(image);
					
					if(category == ''){
						$('#valid_cname').show();
						$('#valid_cname').html('Please enter your category name').css("color","red");
						return false;
					} 
					
					var obj = {
						category : category,
						image : image,
						action : "insert"
					}
					
					// console.log(obj);
					
					$.ajax({
					type : "POST",
					url : "ajax/category_ajax.php",
					data : obj,
					success : function(resp)
						{
							if(resp == "success"){
								console.log("successfull");
								location.reload();
							}else{
								console.log("error");	
							}
						} 
					})
					
				});
				
				$('.update').click(function(){
					var category = $('#cname').val();
					var image = $('#filename').val();
					var id = '<?php echo $id ?>';
					
					var obj = {
						category : category,
						image : image,
						id : id,
						action : "update"
					}
					
					// console.log(obj);
					
					$.ajax({
					 type : "POST",
					 url : "ajax/category_ajax.php",
					data : obj,
					success : function(resp)
						{
							if(resp == "success"){
								console.log("successfull");
							}else{
								console.log("error");	
							}
						} 
					})
					
				});
				
				
				
				$(".cancel").click(function(){
					clear();
				});
				
				$('#cname').on('input', function(){
					$('#valid_cname').hide();
				});
			});
		</script>

  </body>
</html>

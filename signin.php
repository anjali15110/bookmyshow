<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Login</title>

  <?php include "include/header_script.php";?>
</head>

  <body class="bg-light-gray" id="body">
  <?php include "include/header.php";?>
		
	<section class="text-center mb-5">
	  <!-- Background image -->
		<div class="p-5 bg-image" style="background-image: url('images/signinbackground.jpg'); background-position: center; height: 400px;"></div>
	  <!-- Background image -->

		<div class="card mx-4 mx-md-5 shadow-5-strong" style="
			margin-top: -300px;
			background: hsla(0, 0%, 100%, 0.8);
			margin-inline: auto!important;
			width: 50%;
			backdrop-filter: blur(30px);
			">
			<div class="card-body py-5 px-md-5">

				<div class="row d-flex justify-content-center">
					<div class="col-lg-8">
						<h2 class="fw-bold mb-5">Sign in</h2>
				 
						<!-- Email input -->
						<div class="form-outline mb-4 signin">
						  <input type="email" id="email" class="form-control" placeholder="Email address"/>
						  <!-- <label class="form-label" for="form3Example3">Email address</label> -->
						</div>

						<!-- Password input -->
						<div class="form-outline mb-4 signin">
						  <input type="password" id="password" class="form-control" placeholder="Password"/>
						  <!-- <label class="form-label" for="form3Example4">Password</label> -->
						</div>

						<!-- Checkbox -->
						<div class="form-check d-flex justify-content-center mb-4">
						  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
						  <label class="form-check-label" for="form2Example33">
							Remember me
						  </label>
						</div>

						<!-- Submit button -->
						<button type="submit" id="signin" class="btn btn-primary btn-block mb-4">
						  Sign in
						</button>
						<div>
							<p> &emsp; If you have no account <a href="front_registeration.php"> <span> Register</span></a></p>
						</div>
						     

						<!-- Register buttons -->
						<div class="text-center">
							<p>or sign up with:</p>
							<button type="button" class="btn btn-link btn-floating mx-1">
								<i class="fab fa-facebook-f"></i>
							</button>

							<button type="button" class="btn btn-link btn-floating mx-1">
								<i class="fab fa-google"></i>
							</button>

							<button type="button" class="btn btn-link btn-floating mx-1">
								<i class="fab fa-twitter"></i>
							</button>

							<button type="button" class="btn btn-link btn-floating mx-1">
								<i class="fab fa-github"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
		<?php include "include/footer.php";?>
		<?php include "include/footer_script.php";?>
		
		<script>
			$(document).ready(function(){
				$("#signin").click(function(){
					var email = $('#email').val();
					var password = $('#password').val();
					
					var obj = {
					email : email,
					password : password
					}
					
					$.ajax({
						type : "POST",
						url : "admin/ajax/signin_ajax.php",
						data : obj,
						success : function(response)
						{	
							if(response == 1){
								window.location.href = 'index.php';
							}else{
								//console.log('jjhfdjkgk');
								alert('Enter your correct Email and Password');								
							}
						}
					})
				})
			})
		</script>

</body>
</html>

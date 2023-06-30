<?php
	include "admin/conn/conn.php";
	
	$user_id = null;
	$userdata = null;
	
	session_start();
	
	if(isset($_SESSION['front_user']))
	{
		$user_id = $_SESSION['front_user'];
		$userquery = "select * from user_table where id = ".$user_id;
		$usersql = mysqli_query($conn, $userquery);
		$userdata = mysqli_fetch_assoc($usersql);
		$name = $userdata['name'];
		//echo $name;
	}
	
	$query = "select * from category where id between 1 and 7";
	$sql = mysqli_query($conn, $query);
	//print_r($sql);
?>

<header class="head" id="link">
			<div class="container">
				<div>
					<div class="row">
						<div class="col-md-9 col-sm-12">
							<div class="mainheader">
								<a href="index.php"><img src="images/bookmyshow_logo.jpg"/></a>
								<div style="display: inline; position: relative; display: initial;">
								<input type="search" style="" id="search" class="px-3" placeholder="Search for Comedy, Music and Exibitions"/><i class="fa-solid fa-magnifying-glass" style="position:absolute; left:22px; color:black; top:4px;">
								</i>
								</div>
							</div>
							
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="row">
								<div class="col-6">
									<div style="text-align:right;">
										<div class="dropdown">
											<button type="button" class="btn text-light dropdown-toggle" data-bs-toggle="dropdown">
											  Delhi-NCR
											</button>
											<ul class="dropdown-menu">
											  <li><a class="dropdown-item" href="#">1</a></li>
											  <li><a class="dropdown-item" href="#">2</a></li>
											  <li><a class="dropdown-item" href="#">3</a></li>
											  <li><hr class="dropdown-divider"></li>
											  <li><a class="dropdown-item" href="#">Another link</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-6">
									<?php
										if(isset($_SESSION['front_user'])){
									?>
										<div class="dropdown">
											<button type="button" class="btn btn-danger " data-bs-toggle="dropdown">
											  <?php echo $userdata['name'] ?>
											</button>
											<ul class="dropdown-menu">
											  <li><a class="dropdown-item" href="#">Name&nbsp; &nbsp; &nbsp;<?php echo $userdata['email'] ?></a></li>
											  <li><a class="dropdown-item" href="#">Phone&nbsp; &nbsp; &nbsp;<?php echo $userdata['phone'] ?></a></li>
											  <li><a class="dropdown-item" href="#">City&nbsp; &nbsp; &nbsp;<?php echo $userdata['city'] ?></a></li>
											  <li><a class="dropdown-item" href="#">State&nbsp; &nbsp; &nbsp;<?php echo $userdata['state'] ?></a></li> 
											  <li class="btn btn-danger text-light ml-2"><a class="dropdown-item btn btn-danger" href="signup.php">Signup</a></li> 
											  
											</ul>
										</div>
										
									<?php
										}else{
									?>
										<div style="text-align:left;">
											<a href="signin.php" class="btn btn-danger font-size-1 btn-pill py-1 font-weight-bold" style="margin-top:3px; margin-left:10px;">
											Sign In</a>
										</div>
										
									<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<section class="section_one text-light" style="background:#222439;">
			<div class="container">
				<div class="nav">
					<ul class="my-2">
							<?php 
								while($data = mysqli_fetch_assoc($sql)){
							?>
								<li><a class="text-light" href="list_show.php?category=<?php echo $data['id'];?>"><?php echo $data['category']; ?></a></li>
							<?php
								}
							?>
					</ul>
				</div>
			</div>
		</section>
		
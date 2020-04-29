		<?php include "includes/admin_header.php" ?>
		<?php include "../includes/db.php" ?>
		<body class="ttr-opened-sidebar ttr-pinned-sidebar">

		<!-- header start -->
		<?php include "includes/admin_nav.php" ?>



		<!-- header end -->
		<!-- Left sidebar menu start -->
		<?php include "includes/admin_sidebar.php" ?>

		<!-- Left sidebar menu end -->

		<!--Main container start -->
		<main class="ttr-wrapper">
		<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">User Profile</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>User Profile</li>
			</ul>
		</div>	
		<div class="row">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
						<h4>User Profile</h4>
					</div>
					<div class="widget-inner">

						<form method="post" action="" class="edit-profile m-b30">
							
								<div class="form-group row">
									<div class="col-sm-10  ml-auto">
										<h3>1. Personal Details</h3>
										<?php

										if(isset($_SESSION['username'])){

										$username     = $_SESSION['username'];

										$query = "SELECT * FROM users WHERE username = '{$username}' ";
										$users_query = mysqli_query($connection,$query);

										while($row = mysqli_fetch_assoc($users_query)){
										$user_id = $row['user_id'];
										$username = $row['username'];
										$user_firstname = $row['user_firstname'];
										$user_lastname = $row['user_lastname'];
										$user_occupation = $row['user_occupation'];
										$user_company = $row['user_company'];
										$user_phone = $row['user_phone'];
										$user_address = $row['user_address'];
										$user_city = $row['user_city'];
										$user_state = $row['user_state'];
										$user_postcode = $row['user_postcode'];
										$user_linkedin = $row['user_linkedin'];
										$user_facebook = $row['user_facebook'];
										$user_twitter = $row['user_twitter'];
										$user_instagram = $row['user_instagram'];
										$user_email = $row['user_email'];
										$user_password = $row['user_password'];
										$user_role = $row['user_role'];

										}

										}


										?>

										<?php


									if(isset($_POST['edit_user'])) { 

									echo	$username       	 = $_POST['username'];
									echo	$user_firstname        = $_POST['user_firstname'];
									echo	$user_lastname         = $_POST['user_lastname'];
									echo	$user_role             = $_POST['user_role'];
									echo	$user_email            = $_POST['user_email'];
									echo	$user_occupation       = $_POST['user_occupation'];
									echo	$user_company            = $_POST['user_company'];
									echo	$user_phone            = $_POST['user_phone'];
									echo	$user_address            = $_POST['user_address'];
									echo	$user_city           	 = $_POST['user_city'];
									echo	$user_state            		= $_POST['user_state'];
									echo	$user_postcode            = $_POST['user_postcode'];
									echo	$user_linkedin            = $_POST['user_linkedin'];
									echo	$user_facebook            = $_POST['user_facebook'];
									echo	$user_twitter            = $_POST['user_twitter'];
									echo	$user_instagram            = $_POST['user_instagram'];
										
										// $query = "UPDATE users SET";
										// $query .= "username = '{$username}', ";
										// $query  .= "user_firstname  = '{$user_firstname}', ";
										// $query  .= "user_lastname = '{$user_lastname}', ";
										// $query  .= "user_role = '{$user_role}' ";
										// $query  .= "user_email  = '{$user_email }', ";
										// $query .= "user_occupation = '{$user_occupation}', ";
										// $query .= "user_company = '{$user_company}', ";
										// $query .= "user_phone = '{$user_phone}', ";
										// $query .= "user_address = '{$user_address}', ";
										// $query .= "user_city = '{$user_city}', ";
										// $query .= "user_state = '{$user_state}', ";
										// $query .= "user_postcode = '{$user_postcode}',";
										// $query .= "user_linkedin = '{$user_linkedin}', ";
										// $query .= "user_facebook = '{$user_facebook}', ";
										// $query .= "user_twitter = '{$user_twitter}', ";
										// $query .= "user_instagram = '{$user_instagram}' ";
										// $query .= "WHERE username = '{$username}' ";
										// $update_query = mysqli_query($connection,$query);
										// confirmQuery($update_query );


									}


									

									?>
								</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Username</label>
									<div class="col-sm-7">
										<input name="username" value="<?php  echo $username; ?>" class="form-control" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Firstname</label>
									<div class="col-sm-7">
										<input value="<?php  echo $user_firstname; ?>" name="user_firstname" class="form-control" type="text" >
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Lastname</label>
									<div class="col-sm-7">
										<input value="<?php  echo $user_lastname; ?>" class="form-control" type="text" name="user_lastname">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">User Role</label>
									<div class="col-sm-7">
										<input  value="<?php  echo $user_role; ?>" class="form-control" type="text" name="user_role">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-7">
										<input value="<?php  echo $user_email; ?>" class="form-control" type="text" name="user_email">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Occupation</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_occupation; ?>" name="user_occupation">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Company Name</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_company; ?>" name="user_company">
										<span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Phone No.</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_phone; ?>" name="user_phone">
									</div>
								</div>
								
								<div class="seperator"></div>
								
								<div class="form-group row">
									<div class="col-sm-10 ml-auto">
										<h3>2. Address</h3>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Address</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_address; ?>" name="user_address">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">City</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_city; ?>" name="user_city">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">State</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_state; ?>" name="user_state">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Postcode</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_postcode; ?>" name="user_postcode">
									</div>
								</div>

								<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

								<div class="form-group row">
									<div class="col-sm-10 ml-auto">
										<h3 class="m-form__section">3. Social Links</h3>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Linkedin</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_linkedin; ?>" name="user_linkedin">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Facebook</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_facebook; ?>" name="user_facebook">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Twitter</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_twitter; ?>" name="user_twitter">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Instagram</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php  echo $user_instagram; ?>" name="user_instagram">
									</div>
								</div>
								
								<div class="form-group">
                                <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
                            </div>
							
							<!-- <div class="">
								<div class="">
									<div class="row">
										<div class="col-sm-2">
										</div>
										<div class="col-sm-7">
											<button name="edit_user" type="submit" class="btn">Save changes</button>
											<button type="reset" class="btn-secondry">Cancel</button>
										</div>
									</div>
								</div>
							</div> -->
						</form>
		<!-- 
						<form class="edit-profile">
							<div class="">
								<div class="form-group row">
									<div class="col-sm-10 ml-auto">
										<h3>4. Password</h3>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Current Password</label>
									<div class="col-sm-7">
										<input class="form-control" type="password" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">New Password</label>
									<div class="col-sm-7">
										<input class="form-control" type="password" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Re Type Password</label>
									<div class="col-sm-7">
										<input class="form-control" type="password" value="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
								</div>
								<div class="col-sm-7">
									<button type="reset" class="btn">Save changes</button>
									<button type="reset" class="btn-secondry">Cancel</button>
								</div>
							</div>
								
						</form> -->


					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>
		</div>
		</main>
		<div class="ttr-overlay"></div>

		<!-- External JavaScripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
		<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendors/counter/waypoints-min.js"></script>
		<script src="assets/vendors/counter/counterup.min.js"></script>
		<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
		<script src="assets/vendors/masonry/masonry.js"></script>
		<script src="assets/vendors/masonry/filter.js"></script>
		<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
		<script src='assets/vendors/scroll/scrollbar.min.js'></script>
		<script src="assets/js/functions.js"></script>
		<script src="assets/vendors/chart/chart.min.js"></script>
		<script src="assets/js/admin.js"></script>
		<script src='assets/vendors/switcher/switcher.js'></script>
		</body>

		<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
		</html>
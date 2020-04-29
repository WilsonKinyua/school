
<?php include "includes/db.php" ?>
<?php include "./functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
		<!-- DESCRIPTION -->
		<meta name="description" content="masomo" />
	
	<!-- OG -->
	<meta property="og:title" content="masomo" />
	<meta property="og:description" content="masomo" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Masomo Mkononi </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">

	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
			<a href="index.php"><img src="assets/images/logo-white-2.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="login.php">Click here</a></p>
				</div>	
				<form action="register.php" method="post" class="contact-bx">
					<?php

					if(isset($_POST['submit'])){

						$username 		= trim($_POST['username']);
						$email 			= trim($_POST['email']);
						$password 		= trim($_POST['password']);

						                        
						$error = [
                        
							'username'=> '',
							'email'=>'',
							'password'=>''
					
						];
					

						if(strlen($username) < 4){
							$error['username'] = "Username needs to be longer than four characters";
						}
						if(strlen($password) < 5){
							$error['password'] = "Password needs to be longer than five characters";
						}


						if($username == ''){
							$error['username'] = "Username cannot be empty";
						}

						if(username_exists($username)){
							$error['username'] = "Username exist pick another one please";
						}


						if($email == ''){
							$error['email'] = "Email cannot be empty";
						}

						if(email_exists($email)){
							$error['email'] = " The email exists,Please Login";
						}

						if($password == ''){
							$error['password'] = "Password cannot be empty";
						}

					  
						foreach ($error as $key => $value) {
							
							if(empty($value)){

								unset($error[$key]);

							}



						} // foreach
						
						if(empty($error)){

						register_user($username,$email,$password);
						// login_user($username,$password);

						}
						
						
					}
					
					?>
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Username</label>
									<input name="username" type="text"  class="form-control">
									<p><?php echo isset($error['username']) ? $error['username']: '' ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input name="email" type="email"  class="form-control">
									<p><?php echo isset($error['email']) ? $error['email']: '' ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>
									<input name="password" type="password" class="form-control" >
									<p><?php echo isset($error['password']) ? $error['password']: '' ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
						<div class="col-lg-12">
							<h6>Sign Up with Social media</h6>
							<div class="d-flex">
								<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
								<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
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
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>

</body>

</html>

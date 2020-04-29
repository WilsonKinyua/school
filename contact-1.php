<?php include "includes/db.php" ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php
if(isset($_POST['submit'])){

$to                 = "wilsonkinyuam@gmail.com";
$subject            = wordwrap($_POST['subject'],70);
$phone              = $_POST['phone'];
$name              = $_POST['name'];
$body               = $_POST['body'];
$header             = "From: ". $_POST['email'];


mail($to,$subject,$phone,$name,$body,$header);

// cleaning the data before going to the database
if(!empty($subject)&& !empty($phone) && !empty($body) ){


	$message = "<div class='alert alert-success' role='alert'>Your Message has been submitted and I will get back to you as soon as possible.</div>";
	
	}else{
	$message = "<div class='alert alert-danger' role='alert'>Fields Cannot be empty.</div>";
	
	}

}else{

	$message = "";
}
?>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Contact Us</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Contact Us 1</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
	
        <!-- inner page banner -->
        <div class="page-banner contact-page section-sp2">
            <div class="container">
                <div class="row">
					<div class="col-lg-5 col-md-5 m-b30">
						<div class="bg-primary text-white contact-info-bx">
						<h2 class="m-b10 title-head">Contact <span>Information</span></h2>
								<p>More details about the event please contact the following and know more about the course.</p>
								<div class="widget widget_getintuch">	
									<ul>
										<li><i class="ti-location-pin"></i>New ziland </li>
										<li><i class="ti-mobile"></i>+2547-17255460 (24/7 Support Line)</li>
										<li><i class="ti-email"></i>info@frenchuniversity.com</li>
									</ul>
							</div>
							<h5 class="m-t0 m-b20">Follow Us</h5>
							<ul class="list-inline contact-social-bx">
							<li><a href="https://www.facebook.com/frenchuniversity" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.twitter.com/frenchuniversity" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/frenchuniversity" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://www.google-plus.com/frenchuniversity" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<form class="contact-bx " method="post" action="">
						<!-- <div class="ajax-message"></div> -->
							<div class="heading-bx left">
								<h2 class="title-head">Get In <span>Touch</span></h2>
								<h5 class="text_center"><?php echo $message; ?></h5>
								<p>Leave us a message and we will be back to you as soon as possible</p>
							</div>
							<div class="row placeani">
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Your Name</label>
											<input name="name" type="text" required class="form-control valid-character">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group"> 
											<label>Your Email Address</label>
											<input name="email" type="email" class="form-control" required >
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Your Phone</label>
											<input name="phone" type="text" required class="form-control int-value">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Subject</label>
											<input name="subject" type="text" required class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<label>Type Message</label>
											<textarea name="body" rows="4" class="form-control" required ></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
											<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
		</div>
        <!-- inner page banner END -->
    </div>
    <!-- Content END-->
    <!-- Footer ==== -->
	<?php include "includes/footer.php"; ?>
    <!-- Footer END ==== -->
    <!-- scroll top button -->
    <button class="back-to-top fa fa-chevron-up" ></button>
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
<script src='assets/vendors/switcher/switcher.js'></script>
<script src='../../www.google.com/recaptcha/api.js'></script>
</body>


</html>

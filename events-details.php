<?php include "includes/db.php" ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Courses Details</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Courses Details</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
		<!-- inner page banner END -->
		
								<?php 



							if(isset($_GET['e_id'])){

							$the_event_id = $_GET['e_id'];
							}

													
						$query = "SELECT * FROM events WHERE events_id = {$the_event_id}";
						$events_query = mysqli_query($connection,$query);
						confirmQuery($events_query);

						while($row = mysqli_fetch_assoc($events_query)){
							$events_id = $row['events_id'];
							$events_title = $row['events_title'];
							$events_category = $row['events_category'];
							$events_date = $row['events_date'];
							$events_time = $row['events_time'];
							$events_location = $row['events_location'];
							$events_content = substr($row['events_content'],0,50);
							$events_image = $row['events_image'];





						}

						?>
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-8 col-md-7 col-sm-12">
							<div class="courses-post">
								<div class="ttr-post-media media-effect">
									<a href="#"><img src="../school/images/<?php echo $events_image; ?>" alt=""></a>
								</div>
								<div class="ttr-post-info">
									<div class="ttr-post-title ">
										<h2 class="post-title"><?php echo $events_title; ?></h2>
									</div>
									<div class="ttr-post-text">
										<p><?php echo $events_content; ?></p>
									</div>
								</div>
							</div>
				
							


						</div>
						<div class="col-lg-4 col-md-5 col-sm-12 m-b30">
							<div class="bg-primary text-white contact-info-bx m-b30">
								<h2 class="m-b10 title-head">Contact <span>Information</span></h2>
								<p>More details about the event please contact the following and know more about the course.</p>
								<div class="widget widget_getintuch">	
									<ul>
										<li><i class="ti-location-pin"></i><?php echo $events_location; ?></li>
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
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.1298878182047!2d-81.38369578541523!3d30.204840081824198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e437ac927a996b%3A0x799695b1a2b970ab!2sNona+Blue+Modern+Tavern!5e0!3m2!1sen!2sin!4v1548177305546" class="align-self-stretch d-flex" style="width:100%; min-width:100%; min-height:400px;" allowfullscreen></iframe> -->
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- contact area END -->
		
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
	<?php include "includes/footer.php"; ?>
    <!-- Footer END ==== -->
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
</body>

</html>

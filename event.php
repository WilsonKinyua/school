<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Events</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Events</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
			
				<?php 

												
					$query = "SELECT * FROM events";
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







		?>
					<div class="clearfix">
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">
							<li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
								<div class="event-bx m-b30">
									<div class="action-box">
										<img src="../school/images/<?php echo $events_image; ?>" alt="">
									</div>
									<div class="info-bx d-flex">
										<div>
											<div class="event-time">
												<!-- <div class="event-date">29</div> -->
												<div class="event-month"><?php echo $events_date; ?></div>
											</div>
										</div>
										<div class="event-info">
											<h4 class="event-title"><a href="events-details.php?source=details&e_id=<?php echo $events_id; ?>"><?php echo $events_title; ?></a></h4>
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-clock-o"></i><?php echo $events_time; ?></a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> <?php echo $events_location; ?></a></li>
											</ul>
											<p><?php echo $events_content; ?></p>
										</div>
									</div>
								</div>
							</li>
		

				
						</ul>
					</div>
					<?php }  ?>

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

</body>

</html>

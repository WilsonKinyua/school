
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
                    <h1 class="text-white">Search Results</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="index.php">Home</a></li>
					<li>search</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
		
						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="profile-content-bx">
								<div class="tab-content">
									<div class="tab-pane active" id="courses">
							
										<div class="courses-filter">
											<div class="clearfix">

                <?php

                            if(isset($_POST['submit'])){
                                
                                $search =  $_POST['search'];
                                $query = "SELECT * FROM courses WHERE course_name LIKE '%$search%' ";
                                $search_query = mysqli_query($connection,$query);
                                if(!$search_query){
                                    die("Query failed ". mysqli_error($connection));
                                }
                                $count = mysqli_num_rows($search_query);
                                if($count == 0){
                                    echo '<div class="alert alert-danger" role="alert">
                                        No such results!
                                    </div>';
                                }else{
                                    echo '<div class="alert alert-success" role="alert">
                                        Search succesfull!
                                    </div>';
                                

                                while($row = mysqli_fetch_assoc($search_query)){
                                    $course_id              = $row['course_id'];
                                    $course_name        = $row['course_name'];
                                    $course_category    = $row['course_category'];
                                    $course_cost_before        = $row['course_cost_before'];
                                    $course_cost_after        = $row['course_cost_after'];
                                    $course_reviews        = $row['course_reviews'];
                                    $course_image           = $row['course_image'];
                                    


                                    ?>

                                    
                    
                
                        
												<ul id="masonry" class="ttr-gallery-listing magnific-image row">
													<li class="action-card col-md-6 col-lg-4 col-sm-6 m-b30 publish">
														<div class="cours-bx">
                                                        <div class="action-box">
                                                            <img src="assets/images/courses/<?php echo $course_image; ?>" alt="">
                                                           
                                                        </div>
                                                                        <div class="info-bx text-center">
																<h5><a href="course-details.php?c_id=<?php //echo $course_id; ?>"><?php echo $course_name; ?> </a></h5>
																<span><?php echo $course_category; ?></span>
															</div>
															<div class="cours-more-info">
																<div class="review">
																	<span><?php echo $course_reviews; ?> Review</span>
																	<ul class="cours-star">
																		<!-- <li class="active"><i class="fa fa-star"></i></li>
																		<li class="active"><i class="fa fa-star"></i></li>
																		<li class="active"><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li> -->
																	</ul>
																</div>
																<div class="price">
																	<del>$<?php echo $course_cost_before; ?></del>
																	<h5>$<?php echo $course_cost_after; ?></h5>
																</div>
															</div>
														</div>
													</li>
                                                </ul>
                                                

                                <?php }}} ?>

											</div>
										</div>
									</div>
								
								
								
								</div> 
							</div>
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

</body>

</html>

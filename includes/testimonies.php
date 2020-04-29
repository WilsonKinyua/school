<div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(assets/images/background/bg1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-white heading-bx left">
                                <h2 class="title-head text-uppercase">what people <span>say</span></h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                            </div>
                        </div>
                        <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">

                                                <?php
                                                        $query = "SELECT * FROM testimonies";
                                                        $testimonies_query = mysqli_query($connection,$query);
                                            
                                                        while($row = mysqli_fetch_assoc($testimonies_query)){
                                                            $test_id                         = $row['test_id'];
                                                            $test_name                      = $row['test_name'];
                                                            $test_proffesionalizm           = $row['test_proffesionalizm'];
                                                            $test_content                    = substr($row['test_content'],0,120);
                                                            $test_image                      = $row['test_image'];
                                                            
                                                ?>
                            <div style="height: 100" class="item">
                                <div class="testimonial-bx">
                                    <div class="testimonial-thumb">
                                        <img src="../school/images/<?php echo $test_image; ?>" alt="">
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="name"><?php echo $test_name; ?></h5>
                                        <p>-<?php echo $test_proffesionalizm; ?></p>
                                    </div>
                                    <div class="testimonial-content">
                                        <p><?php echo $test_content; ?> ...</p>
                                    </div>
                                </div>
                            </div>
                             <?php   } ?>
                          
                            <!-- <div class="item">
                                <div class="testimonial-bx">
                                    <div class="testimonial-thumb">
                                        <img src="assets/images/testimonials/pic2.jpg" alt="">
                                    </div>
                                    <div class="testimonial-info">
                                        <h5 class="name">Peter Packer</h5>
                                        <p>-Art Director</p>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
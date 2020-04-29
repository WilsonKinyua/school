<div class="section-area section-sp2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center heading-bx">
                                <h2 class="title-head m-b0">Upcoming <span>Events</span></h2>
                                <p class="m-b0">Upcoming Education Events. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">


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

                                <div class="item">
                                    <div class="event-bx">
                                        <div class="action-box">
                                            <img src="../school/images/<?php echo $events_image; ?>" alt="">
                                        </div>
                                        <div class="info-bx d-flex">
                                            <div>
                                                <div class="event-time">
                                                    <!-- <div class="event-date">30</div> -->
                                                    <div class="event-month"><?php echo $events_date; ?></div>
                                                </div>
                                            </div>
                                            <div class="event-info">
                                                <h4 class="event-title"><a href="events-details.php?source=details&e_id=<?php echo $events_id; ?>"><?php echo $events_title; ?></a></h4>
                                                <ul class="media-post">
                                                    <li><a href="#"><i class="fa fa-clock-o"></i><?php echo $events_time; ?></a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i><?php echo $events_location; ?></a></li>
                                                </ul>
                                                <p><?php echo $events_content; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                             <?php }  ?>

                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn">View All Event</a>
                        </div>
                    </div>
                </div>
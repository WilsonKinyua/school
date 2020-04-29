



<div class="section-area section-sp2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 heading-bx left">
                                <h2 class="title-head">Recent <span>News</span></h2>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                            </div>
                        </div>
                        <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">

                                                <?php

                                        $query = "SELECT * FROM news";
                                        $news_query = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($news_query)){
                                            $news_id = $row['new_id'];
                                            $news_title = $row['new_title'];
                                            $news_category = $row['new_category'];
                                            $news_content = substr($row['new_content'],0,50);
                                            $new_date = $row['new_date'];
                                            $new_author = $row['new_author'];
                                            $new_image = $row['new_image'];


                                        ?>
                                        <div class="item">
                                            <div class="recent-news">
                                                <div class="action-box">
                                                    <img src="../school/images/<?php echo $new_image; ?>" alt="">
                                                </div>
                                                <div class="info-bx">
                                                    <ul class="media-post">
                                                        <li><a href="news_details.php?source=details&n_id=<?php echo $news_id; ?>"><i class="fa fa-calendar"></i><?php echo $new_date; ?></a></li>
                                                        <li><a href="news_details.php?source=details&n_id=<?php echo $news_id; ?>"><i class="fa fa-user"></i><?php echo $new_author; ?></a></li>
                                                    </ul>
                                                    <h5 class="post-title"><a href="news_details.php?source=details&n_id=<?php echo $news_id; ?>"><?php echo $news_title; ?></a></h5>
                                                    <p><?php echo $news_content; ?></p>

                                                </div>
                                            </div>
                                        </div>


                                    <?php } ?>
                          
                        </div>
                    </div>
                </div>
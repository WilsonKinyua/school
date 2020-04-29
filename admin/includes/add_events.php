<?php 

if(isset($_POST['create_events'])){
    $events_title = $_POST['events_title'];
    $events_category = $_POST['events_category'];
    $events_location = $_POST['events_location'];
    $events_content =$_POST['events_content'];
    $events_date = $_POST['events_date'];
    $events_time = $_POST['events_time'];

    $events_image       = $_FILES['image']['name'];
    $events_image_temp   = $_FILES['image']['tmp_name'];

    move_uploaded_file($events_image_temp ,"../images/$events_image");

    $query = "INSERT INTO events(events_title, events_category, events_location, events_content, events_date, events_time, events_image) ";
    $query .= "VALUES('{$events_title}','{$events_category}','{$events_location}','{$events_content}','{$events_date}', '{$events_time}','{$events_image}') ";
    $insert_query = mysqli_query($connection,$query);
    confirmQuery($insert_query);

}

?>
      
      
      <form action="" method="post" enctype="multipart/form-data">    
                    
                    
                    <div class="form-group">
                        <label for="title">Event Title</label>
                        <input type="text" class="form-control" name="events_title">
                    </div>
                    <div class="form-group">
                    <label for="category">Category</label>
                            <select name="events_category" id="events_category">
                                <option value="Education">Education</option>
                                <option value="Music">Music</option>
                                <option value="Tour">Tour</option>
                                <option value="Games">Games</option>
                                <option value="Health">Health</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="events_location">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" name="events_content">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" class="form-control" name="events_date">
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="text" class="form-control" name="events_time">
                    </div>
                    
                <div class="form-group">
                        <label for="post_image">Post Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="create_events" value="Publish Event">
                    </div>


                </form>
                
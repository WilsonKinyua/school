
<table class="table table-bordered table-hover">                          
          <thead>
          <tr class='table-info'>
          <th>Id</th>
          <th>Title</th>
          <th>Category</th>
          <th>Date</th>
          <th>Time</th>
          <th>Location</th>
          <th>Content</th>
          <th>Image</th>

          
          </tr>

          </thead>
          <tbody>

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
                echo "<tr>";
                ?>

                <?php
                echo "<td>$events_id </td>";
                echo "<td>$events_title</td>";
                echo "<td>$events_category</td>";
                echo "<td>$events_date</td>";
                echo "<td>$events_time</td>";
                echo "<td>$events_location</td>";
                echo "<td>$events_content</td>";
                echo "<td><img width='100' src ='../images/$events_image'></td>";
               
               
                 echo "</tr>";
                  ?>
          <?php  } ?>



          </tbody>

</table>

<!-- class="table-info" -->
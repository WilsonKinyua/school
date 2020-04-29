
<table class="table table-bordered table-hover">                          
          <thead>
          <tr class='table-info'>
          <th>Id</th>
          <th>Title</th>
          <th>Category</th>
          <th>Author</th>
          <th>Content</th>
          <th>Image</th>
          <th>Date</th>

          
          </tr>

          </thead>
          <tbody>

            <?php

            // if(!$connection){
            //     die("Query Failed" . mysqli_error($connection));
            // }


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
                echo "<tr>";
                ?>

                <?php
                echo "<td>$news_id </td>";
                echo "<td>$news_title </td>";
                echo "<td>$news_category </td>";
                echo "<td> $new_author</td>";
                echo "<td>$news_content </td>";
                echo "<td><img width='100' src ='../images/$new_image'></td>";
                echo "<td>$new_date </td>";
               
               
                 echo "</tr>";
                  ?>
          <?php  } ?>


           
            <tr>
                <td>1</td>
                <td>Education is the Key</td>
                <td>Education</td>
                <td>Wilson Kinyua</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim blanditiis nobis quisquam?</td>
                <td><img width="100" src="../images/image.jpg" alt=""></td>
                <td>20202-04-09</td>
            </tr>

          </tbody>

</table>

<!-- class="table-info" -->
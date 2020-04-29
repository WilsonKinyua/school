
<table class="table table-bordered table-hover">                          
          <thead>
          <tr class='table-info'>
          <th>Id</th>
          <th>Name</th>
          <th>Professionalism</th>
          <th>Testimony</th>
          <th>Image</th>

          
          </tr>

          </thead>
          <tbody>

            <?php

            // if(!$connection){
            //     die("Query Failed" . mysqli_error($connection));
            // }


            $query = "SELECT * FROM testimonies";
            $testimonies_query = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($testimonies_query)){
                $test_id                         = $row['test_id'];
                $test_name                      = $row['test_name'];
                $test_proffesionalizm           = $row['test_proffesionalizm'];
                $test_content                    = substr($row['test_content'],0,150);
                $test_image                      = $row['test_image'];
                echo "<tr>";
                ?>

                <?php
                echo "<td>$test_id</td>";
                echo "<td>$test_name</td>";
                echo "<td>$test_proffesionalizm</td>";
                echo "<td>$test_content</td>";
                echo "<td><img height='100' width='100' src ='../images/$test_image'></td>";

               
               
                 echo "</tr>";
                  ?>
          <?php  } ?>


          </tbody>

</table>

<!-- class="table-info" -->
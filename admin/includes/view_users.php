
<table class="table table-bordered table-hover">                          
          <thead>
          <tr class='table-info'>
          <th>Id</th>
          <th>Username</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Role</th>

          
          </tr>

          </thead>
          <tbody>

            <?php

            // if(!$connection){
            //     die("Query Failed" . mysqli_error($connection));
            // }


            $query = "SELECT * FROM users";
            $users_query = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($users_query)){
                $user_id = $row['user_id'];
                $username = $row['username'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_role = $row['user_role'];
                echo "<tr>";
                ?>

                <?php
                echo "<td>$user_id </td>";
                echo "<td>$username </td>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_role</td>";

               
               
                 echo "</tr>";
                  ?>
          <?php  } ?>


          </tbody>

</table>

<!-- class="table-info" -->
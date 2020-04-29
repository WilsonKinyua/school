<?php ob_start(); ?>
<?php include "delete_modal.php";


?>
<table class="table table-bordered table-hover">                          
          <thead>
          <tr class='table-info'>
          <th>Id</th>
          <th>Name</th>
          <th>Career</th>
          <th>Twitter</th>
          <th>Facebook</th>
          <th>Instagram</th>
          <th>Email</th>
          <th>Profile</th>
          <th>Description</th>
          <th>Category</th>
          <th>Edit</th>
          <th>Delete</th>

          
          </tr>

          </thead>
          <tbody>

            <?php

 

            $query = "SELECT * FROM instructors";
            $instructors_query = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($instructors_query)){
                $instructor_id              = $row['instructor_id'];
                $instructor_name            = $row['instructor_name'];
                $instructor_proff           = $row['instructor_proff'];
                $instructor_fb              = $row['instructor_fb'];
                $instructor_twi             = $row['instructor_twi'];
                $instructor_insta           = $row['instructor_insta'];
                $instructor_email           = $row['instructor_email'];
                $instructor_image           = $row['instructor_image'];
                $instructor_description     = $row['instructor_description'];
                $instructor_category        = $row['instructor_category'];
                echo "<tr>";
                ?>

                <?php
                echo "<td>$instructor_id</td>";
                echo "<td>$instructor_name</td>";
                echo "<td>$instructor_proff</td>";
                echo "<td>$instructor_fb</td>";
                echo "<td>$instructor_twi</td>";
                echo "<td>$instructor_insta</td>";
                echo "<td>$instructor_email</td>";
                echo "<td><img width='100' src ='../assets/images/courses/$instructor_image'></td>";
                echo "<td>$instructor_description</td>";
                echo "<td>$instructor_category</td>";
                echo "<td><a class='btn btn-info' href='instructor.php?source=edit_instructor&i_id={$instructor_id}'>Edit</a></td>";
                echo "<td> <a rel='$instructor_id' href ='javascript:void(0)' class='delete_link btn btn-danger'>Delete</a></td>";
                // echo "<td> <a class='btn btn-danger'   href='view_courses.php?delete={$course_id} '> Delete</a></td>";

                
                 echo "</tr>";
                  ?>
          <?php  } ?>


          </tbody>

</table>

<!-- class="table-info" -->
<?php

      if(isset($_GET['delete'])){

        $delete_instructor = $_GET['delete'];
        $query         = "DELETE FROM instructors WHERE instructor_id = {$delete_instructor}";
        $delete_query  = mysqli_query($connection,$query);
        confirmQuery($delete_query);
        header("Location: instructor.php");

      }



?>



<script>

$(document).ready(function() {



$(".delete_link").on("click" , function(){

  var id = $(this).attr("rel");

  var delete_url = "instructor.php?delete=" + id + "";
  $(".modal_delete_link").attr("href",delete_url);
  $("#myModal").modal("show");


})

});
</script>
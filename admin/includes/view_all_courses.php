<?php ob_start(); ?>
<?php include "delete_modal.php";


?>
<table class="table table-bordered table-hover">                          
          <thead>
          <tr class='table-info'>
          <th>Id</th>
          <th>Category</th>
          <th>Course</th>
          <th>Course <br> Cost Before</th>
          <th>Course <br> Cost After</th>
          <th>Course <br> Image</th>
          <th>Course <br> Reviews</th>
          <th>Students</th>
          <th>Instructor</th>
          <th>Edit</th>
          <th>Delete</th>

          
          </tr>

          </thead>
          <tbody>

            <?php

            // if(!$connection){
            //     die("Query Failed" . mysqli_error($connection));
            // }


            $query = "SELECT * FROM courses";
            $courses_query = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($courses_query)){
                $course_id              = $row['course_id'];
                $course_category        = $row['course_category'];
                $course_name            = $row['course_name'];
                $course_cost_before     = $row['course_cost_before'];
                $course_cost_after      = $row['course_cost_after'];
                $course_reviews         = $row['course_reviews'];
                $course_image           = $row['course_image'];
                $course_description     = $row['course_description_max'];
                $course_certification   = $row['course_certification'];
                $course_lectures        = $row['course_lectures'];
                $course_quizes          = $row['course_quizes'];
                $course_duration        = $row['course_duration'];
                $course_skilllevel      = $row['course_skilllevel'];
                $course_language        = $row['course_language'];
                $course_students        = $row['course_students'];
                $course_assessments     = $row['course_assessments'];
                echo "<tr>";
                ?>

                <?php
                echo "<td>$course_id</td>";
                echo "<td>$course_category</td>";
                echo "<td> $course_name</td>";
                echo "<td>$ $course_cost_before </td>";
                echo "<td>$ $course_cost_after</td>";
                echo "<td><img width='100' src ='../assets/images/courses/$course_image'></td>";
                echo "<td>$course_reviews</td>";
                echo "<td>$course_students</td>";
                echo "<td></td>";
                echo "<td><a class='btn btn-info' href='view_courses.php?source=edit_courses&c_id={$course_id}'>Edit</a></td>";
                echo "<td> <a rel='$course_id' href ='javascript:void(0)' class='delete_link btn btn-danger'>Delete</a></td>";
                // echo "<td> <a class='btn btn-danger'   href='view_courses.php?delete={$course_id} '> Delete</a></td>";

                
                 echo "</tr>";
                  ?>
          <?php  } ?>


          </tbody>

</table>

<!-- class="table-info" -->
<?php

      if(isset($_GET['delete'])){

        $delete_course = $_GET['delete'];
        $query         = "DELETE FROM courses WHERE course_id = {$delete_course}";
        $delete_query  = mysqli_query($connection,$query);
        confirmQuery($delete_query);
        header("Location: view_courses.php");

      }



?>



<script>

$(document).ready(function() {



$(".delete_link").on("click" , function(){

  var id = $(this).attr("rel");

  var delete_url = "view_courses.php?delete=" + id + "";
  $(".modal_delete_link").attr("href",delete_url);
  $("#myModal").modal("show");


})

});
</script>
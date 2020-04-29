<?php

if(isset($_GET['c_id'])){

    $the_course_id = $_GET['c_id'];

    }


    $query = "SELECT * FROM courses WHERE course_id = {$the_course_id} ";
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

    }

    if(isset($_POST['update_course'])){

        $title              = $_POST['title'];
        $category           = $_POST['course_category'];
        $cost_before        = $_POST['cost_before'];
        $cost_after         = $_POST['cost_after'];
        $reviews            = $_POST['reviews'];

        $course_image       = $_FILES['image']['name'];
        $course_image_temp  = $_FILES['image']['tmp_name'];

        $course_description = $_POST['course_description'];
        $certification      = $_POST['certification'];
        $lectures           = $_POST['lectures'];
        $quizes             = $_POST['quizes'];
        $duration           = $_POST['duration'];
        $skilllevel         = $_POST['skilllevel'];
        $language           = $_POST['language'];
        $students           = $_POST['students'];
        $assessments        = $_POST['assessments'];

        move_uploaded_file($course_image_temp ,"../assets/images/courses/$course_image");

        $query  = "UPDATE courses SET ";
        $query .= "course_name = '{$title}',";
        $query .= "course_category = '{$category}',";
        $query .= "course_cost_before = '{$cost_before}',";
        $query .= "course_cost_after = '{$cost_after}',";
        $query .= "course_reviews = '{$reviews}',";
        $query .= "course_image = '{$course_image}',";
        $query .= "course_description_max = '{$course_description}',";
        $query .= "course_certification = '{$certification}',";
        $query .= "course_lectures = '{$lectures}',";
        $query .= "course_quizes = '{$quizes}',";
        $query .= "course_duration = '{$duration}',";
        $query .= "course_skilllevel = '{$skilllevel}',";
        $query .= "course_language = '{$language}',";
        $query .= "course_students = '{$students}',";
        $query .= "course_assessments = '{$assessments}'";
        $query .= "WHERE course_id = {$course_id}";

        $update_course = mysqli_query($connection,$query);
        confirmQuery($update_course);

        echo '<div class="alert alert-success" role="alert"> Course has been updated!</div>' . " " . ""; 


        

        



    
        

    }



?>



 
<form action="" method="post" enctype="multipart/form-data">    
                    
                    
                    <div class="form-group">
                        <label for="title">Course Title</label>
                        <input value="<?php echo $course_name; ?>" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                    <label for="category">Course Category</label>
                            <select name="course_category" id="course_category">
                                <option value="Post_Graduate">Post-Graduate</option>
                                <option value="Dr">Dr</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Certificate ">Certificate </option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="cost">Course Cost Before</label>
                        <input type="number" name="cost_before" value="<?php echo $course_cost_before; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="cost">Course Cost After</label>
                        <input type="number" name="cost_after" value="<?php echo $course_cost_after; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cost">Course Reviews</label>
                        <input type="number" name="reviews" value="<?php echo $course_reviews; ?>" class="form-control">
                    </div>

                <div class="form-group">
                <label for="image">Course Image</label>
                                 <br>
                        <img width="100" src="../assets/images/courses/<?php echo $course_image; ?>" alt="">
                        <br>
                        <input type="file"  name="image">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Course Description</label>
                        <textarea class="form-control "name="course_description" id="body" cols="30" rows="10">

                        <?php echo str_replace('\r\n','<br>',$course_description); ?>
                        
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="certification">Certification</label>
                        <input value="<?php echo $course_certification; ?>" type="text" class="form-control" name="certification">
                    </div>

                    <div class="form-group">
                        <label for="lectures">Lectures</label>
                        <input value="<?php echo $course_lectures; ?>" type="number" class="form-control" name="lectures">
                    </div>

                    <div class="form-group">
                        <label for="quizes">Quizes</label>
                        <input value="<?php echo $course_quizes; ?>" type="number" class="form-control" name="quizes">
                    </div>

                    <div class="form-group">
                        <label for="quizes">Duration</label>
                        <input value="<?php echo $course_duration; ?>" type="number" class="form-control" name="duration">
                    </div>

                    <div class="form-group">
                        <label for="quizes">Skill Level</label>
                        <input value="<?php echo $course_skilllevel; ?>" type="text" class="form-control" name="skilllevel">
                    </div>
                    <div class="form-group">
                        <label for="quizes">Language</label>
                        <input value="<?php echo $course_language; ?>" type="text" class="form-control" name="language">
                    </div>
                    <div class="form-group">
                        <label for="quizes">Students</label>
                        <input value="<?php echo $course_students; ?>" type="text" class="form-control" name="students">
                    </div>
                    <div class="form-group">
                        <label for="quizes">Assessments</label>
                        <input value="<?php echo $course_assessments; ?>" type="text" class="form-control" name="assessments">
                    </div>
                    

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="update_course" value="Update Course">
                    </div>


                </form>

           
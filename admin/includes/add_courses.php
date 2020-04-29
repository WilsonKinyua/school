<?php 

if(isset($_POST['create_course'])){

    $title              = $_POST['title'];
    $category           = $_POST['category'];
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

    // if(!empty($title) && !empty($category)){
    $query = "INSERT INTO courses (course_name, course_category, course_cost_before, course_cost_after, course_reviews,course_image, course_description_max, course_certification, course_lectures, course_quizes, course_duration, course_skilllevel, course_language, course_students, course_assessments ) ";
    $query .= "VALUES('{$title}','{$category}' ,{$cost_before},{$cost_after},{$reviews},'{$course_image}','{$course_description}','{$certification}',{$lectures},{$quizes},{$duration},'{$skilllevel}','{$language}',{$students},'{$assessments}') ";
    $insert_course = mysqli_query($connection,$query);
    confirmQuery($insert_course);
    echo "<div class='alert alert-success' role='alert'>New Course submitted.... </div>"; 


    // }else{

    // echo "<div class='alert alert-danger' role='alert'>Please fill in the course and the category.... </div>"; 


    // }

    
}

?>
      
      
      <form action="" method="post" enctype="multipart/form-data">    
                    <div class="form-group">
                        <label for="title">Course Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                    <label for="category">Category</label>
                     <select name="category" id="category">
                     <option value="Bachelor">Bachelor</option>
                       <option value="Post-Graduate">Post Graduate</option>
                       <option value="Diploma">Diploma</option>
                   </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Course Cost Before</label>
                        <span class="form-group">( <i class="fa fa-dollar"> )</i></span>
                        <input type="number" class="form-control" name="cost_before">
                    </div>
                    <div class="form-group">
                        <label for="title">Course Cost After</label>
                        <span class="form-group">( <i class="fa fa-dollar"> )</i></span>
                        <input type="number" class="form-control" name="cost_after">
                    </div>
                    <div class="form-group">
                        <label for="title">Course Reviews</label>
                        <input type="number" class="form-control" name="reviews">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Course Description</label>
                        <textarea class="form-control "name="course_description" id="body" cols="30" rows="10">
                        
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="certification">Certification</label>
                        <input type="text" class="form-control" name="certification">
                    </div>

                    <div class="form-group">
                        <label for="lectures">Lectures</label>
                        <input type="number" class="form-control" name="lectures">
                    </div>

                    <div class="form-group">
                        <label for="quizes">Quizes</label>
                        <input type="number" class="form-control" name="quizes">
                    </div>

                    <div class="form-group">
                        <label for="quizes">Duration</label>
                        <input type="number" class="form-control" name="duration">
                    </div>

                    <div class="form-group">
                        <label for="quizes">Skill Level</label>
                        <input type="text" class="form-control" name="skilllevel">
                    </div>
                    <div class="form-group">
                        <label for="quizes">Language</label>
                        <input type="text" class="form-control" name="language">
                    </div>
                    <div class="form-group">
                        <label for="quizes">Students</label>
                        <input type="text" class="form-control" name="students">
                    </div>
                    <div class="form-group">
                        <label for="quizes">Assessments</label>
                        <input type="text" class="form-control" name="assessments">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_image">Course Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="create_course" value="Publish Course">
                    </div>


                </form>
                
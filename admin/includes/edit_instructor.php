<?php

if(isset($_GET['i_id'])){

    $the_instructor_id = $_GET['i_id'];

    }



    $query = "SELECT * FROM instructors WHERE instructor_id = {$the_instructor_id}";
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



    }

    if(isset($_POST['update_instructor'])){

    $name              = $_POST['name'];
    $proff             = $_POST['proff'];
    $fb                = $_POST['fb'];
    $twi               = $_POST['twi'];
    $insta             = $_POST['insta'];
    $email             = $_POST['email'];
    $details           = $_POST['details'];
    $category           = $_POST['category'];

    $instructor_image       = $_FILES['image']['name'];
    $instructor_image_temp  = $_FILES['image']['tmp_name'];

    move_uploaded_file($instructor_image_temp,"../assets/images/instructors/$instructor_image");


    $query  = "UPDATE instructors SET ";
    $query .= "instructor_name = '{$name}',";
    $query .= "instructor_proff = '{$proff}',";
    $query .= "instructor_fb = '{$fb}',";
    $query .= "instructor_twi = '{$twi}',";
    $query .= "instructor_insta = '{$insta}',";
    $query .= "instructor_email = '{$email}',";
    $query .= "instructor_image = '{$instructor_image}',";
    $query .= "instructor_description = '{$details}',";
    $query .= "instructor_category = '{$category}' ";
    $query .= "WHERE instructor_id = {$instructor_id}";

    $update_instructor = mysqli_query($connection,$query);
    confirmQuery($update_instructor);

    echo '<div class="alert alert-success" role="alert"> Instructors has been updated!</div>' . " " . "";


    }

?>




  
<form action="" method="post" enctype="multipart/form-data">    
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input value="<?php echo $instructor_name; ?>" type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                    <label for="category">Career</label>
                    <input value="<?php echo $instructor_proff; ?>" type="text" class="form-control" name="proff">
                    </div>
                    <div class="form-group">
                        <label for="title">Facebook</label>
                        <input value="<?php echo $instructor_fb; ?>" type="text" class="form-control" name="fb">
                    </div>
                    <div class="form-group">
                        <label for="title">Twitter</label>
                        <input value="<?php echo $instructor_twi; ?>" type="text" class="form-control" name="twi">
                    </div>
                    <div class="form-group">
                        <label for="title">Instagram</label>
                        <input value="<?php echo $instructor_insta; ?>" type="text" class="form-control" name="insta">
                    </div>
                    <div class="form-group">
                        <label for="certification">Email</label>
                        <input value="<?php echo $instructor_email; ?>" type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="description"> Details</label>
                        <textarea value="<?php echo $instructor_description; ?>" class="form-control "name="details" cols="30" rows="10">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="lectures">Category</label>
                        <input value="<?php echo $instructor_category; ?>" type="text" class="form-control" name="category">
                    </div>
                    <div class="form-group">
                        <label for="instructor_image">Instructor Image</label>
                        <br>
                        <img width="100" src="../assets/images/instructors/<?php echo $instructor_image; ?>" alt="">
                        <br>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="update_instructor" value="Publish Instructor">
                    </div>


                </form>
                
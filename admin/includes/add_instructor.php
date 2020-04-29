<?php 

if(isset($_POST['create_instructor'])){
        random_int(0,456);
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

    if(!empty($name) && !empty($email)){
    $query = "INSERT INTO instructors (instructor_name, instructor_proff, instructor_fb, instructor_twi, instructor_insta, instructor_email, 
    instructor_image, instructor_description, instructor_category) ";
    $query .= "VALUES('{$name}','{$proff}' ,'{$fb}','{$twi}','{$insta}','{$email}','{$instructor_image}','{$details}','{$category}') ";
    $insert_instructor = mysqli_query($connection,$query);
    confirmQuery($insert_instructor);
    echo "<div class='alert alert-success' role='alert'>New Instructor submitted.... </div>"; 


    }else{

    echo "<div class='alert alert-danger' role='alert'>Please fill in the details.... </div>"; 


    }

    
}

?>
      
      
      <form action="" method="post" enctype="multipart/form-data">    
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                    <label for="category">Career</label>
                    <input placeholder="proffessor" type="text" class="form-control" name="proff">
                    </div>
                    <div class="form-group">
                        <label for="title">Facebook</label>
                        <input placeholder="john" type="text" class="form-control" name="fb">
                    </div>
                    <div class="form-group">
                        <label for="title">Twitter</label>
                        <input placeholder="princess" type="text" class="form-control" name="twi">
                    </div>
                    <div class="form-group">
                        <label for="title">Instagram</label>
                        <input placeholder="wilson" type="text" class="form-control" name="insta">
                    </div>
                    <div class="form-group">
                        <label for="certification">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="description"> Details</label>
                        <textarea class="form-control "name="details" id="body" cols="30" rows="10">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="lectures">Category</label>
                        <input type="text" class="form-control" name="category">
                    </div>
                    <div class="form-group">
                        <label for="instructor_image">Instructor Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="create_instructor" value="Publish Instructor">
                    </div>


                </form>
                
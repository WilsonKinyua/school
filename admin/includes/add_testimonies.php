<?php 

if(isset($_POST['create_testimony'])){
    $test_name                = $_POST['test_name'];
    $test_profession          = $_POST['test_profession'];
    $test_content             = $_POST['content'];

    $test_image         = $_FILES['image']['name'];
    $test_image_temp    = $_FILES['image']['tmp_name'];


    move_uploaded_file($test_image_temp ,"../images/$test_image");


    $query = "INSERT INTO testimonies(test_name,test_proffesionalizm,test_image,test_content) ";
    $query .= "VALUES('{$test_name}','{$test_profession}','{$test_image}','{$test_content}') ";
    $insert_testimon = mysqli_query($connection,$query);
    confirmQuery($insert_testimon);

    
}

?>
      
      
      <form action="" method="post" enctype="multipart/form-data">    
                    
                    
                    <div class="form-group">
                        <label for="test_name">Name</label>
                        <input type="text" class="form-control" name="test_name">
                    </div>
                    <div class="form-group">
                    <label for="author">Professionalism</label>
                    <input type="text" class="form-control" name="test_profession">
                    </div>
                    <div class="form-group">
                        <label for="content">Testimony</label>
                        
                        <textarea class="form-control" name="content" id="body" cols="30" rows="5"></textarea>
                    </div>
                    
                <div class="form-group">
                        <label for="post_image">Post Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="create_testimony" value="Publish Testimony">
                    </div>


                </form>
                
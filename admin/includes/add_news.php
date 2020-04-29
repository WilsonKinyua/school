<?php 

if(isset($_POST['create_news'])){
    $news_title         = $_POST['title'];
    $news_category      = $_POST['news_category'];
    $news_author        = $_POST['news_author'];
    $news_content       = $_POST['content'];
    $news_image         = $_FILES['image']['name'];
    $news_image_temp    = $_FILES['image']['tmp_name'];
    $news_date          = date('d-m-y');

    move_uploaded_file($news_image_temp ,"../images/$news_image");

    if(!empty($news_title) && !empty($news_category) && !empty($news_author) && !empty($news_content) && !empty($news_image)){
    $query = "INSERT INTO news (new_title, new_category, new_content, new_date, new_author, new_image)";
    $query .= "VALUES('{$news_title}' , '{$news_category}' , '{$news_content}', now() , '$news_author', '$news_image')";
    $create_news = mysqli_query($connection,$query);
    confirmQuery($create_news);

    echo "<div class='alert alert-success' role='alert'>New News Event has been created.... </div>"; 

    }else{
        echo "<div class='alert alert-danger' role='alert'>Please Fill in the blank spaces....</div>"; 
    }
    
}

?>
      
      
      <form action="" method="post" enctype="multipart/form-data">    
                    
                    
                    <div class="form-group">
                        <label for="title">News Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                    <label for="category">Category</label>
                            <select name="news_category" id="news_category">
                                <option value="Education">Education</option>
                                <option value="Music">Music</option>
                                <option value="Tour">Tour</option>
                                <option value="Games">Games</option>
                                <option value="Health">Health</option>
                            </select>
                    </div>

                    <div class="form-group">
                    <label for="author">Author</label>
                      <select name="news_author" id="news_author">
                          <option value="Chairman">Chairman</option>
                          <option value="Secretary">Secretary</option>
                          <option value="Admin">Admin</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Contents</label>
                        <input type="text" class="form-control" name="content">
                    </div>
                    
                <div class="form-group">
                        <label for="post_image">Post Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="create_news" value="Publish News">
                    </div>


                </form>
                
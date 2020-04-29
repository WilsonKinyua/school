<?php 

function confirmQuery($result){
  global $connection;

  if(!$result){
    die("Query failed". mysqli_error($connection));
}
return $result;

}

//========================================== function to check whether username exist in the database


function username_exists($username){

    global $connection;
  
    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
  
    if(mysqli_num_rows($result) > 0) {
  
        return true;
  
    } else {
  
        return false;
  
    }
  
  
  }
  
  
  // ============================================================function to check whether user email exist in the database
  
  
  function email_exists($email){
  
    global $connection;
  
  
    $query = "SELECT user_email FROM users WHERE user_email = '$email' ";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
  
    if(mysqli_num_rows($result) > 0) {
  
        return true;
  
    } else {
  
        return false;
  
    }
  
  
  
  }
  
  
  
  
  //======================================================== function to register user
  function register_user($username, $email, $password){
  
       global $connection;
  
        $username =  mysqli_real_escape_string($connection, $username);
        $email =  mysqli_real_escape_string($connection,    $email);
        $password =  mysqli_real_escape_string($connection, $password);
  
    
  
        $password = password_hash($password,PASSWORD_BCRYPT,array("cost" => 9));
  
  

        $query = "INSERT INTO users (username,user_email,user_password,user_role,user_occupation,user_company,user_phone,user_address,user_city,
        user_state,user_postcode,user_linkedin,user_facebook,user_twitter,user_instagram,user_firstname,user_lastname)";
        $query .= "VALUES('{$username}','{$email}','{$password}','subscriber','','' ,'','','','','','','','','','','' )";
        $register_users_query = mysqli_query($connection,$query);
  
          confirmQuery($register_users_query);
  
        echo '<div class="alert alert-success" role="alert">
             Registration successfull please proceed to login!
          </div>';
  
  
  
  }
  
  //=================================================================================== function to login a user
  
    function login_user($username,$password){

          
    global $connection;
     session_start(); 
    $username = trim($username);
    $password = trim($password);
  
  //===================================== cleaning the data 
  $username =  mysqli_real_escape_string($connection,$username);
  $password =  mysqli_real_escape_string($connection,$password);
  
  
  
  $query = "SELECT * FROM users WHERE username = '{$username}' ";
  $select_query = mysqli_query($connection,$query);
  
  if(!$select_query){
      die('Query error'. mysqli_error($connection));
  }
  
  while($row = mysqli_fetch_array($select_query)){
  
      $db_user_id = $row['user_id'];
      $db_username = $row['username'];
      $db_user_password = $row['user_password'];
      $db_user_firstname = $row['user_firstname'];
      $db_user_lastname = $row['user_lastname'];
      $db_user_role = $row['user_role'];
  
  
  
      
  
  if(password_verify($password,$db_user_password)){
    $_SESSION['user_id'] = $db_user_id;
    $_SESSION['username'] = $db_username;
    $_SESSION['firstname'] = $db_user_firstname;
    $_SESSION['lastname'] = $db_user_lastname;
    $_SESSION['user_role'] = $db_user_role;
    
     if(is_admin()){

      header("Location: /school/admin");

     }else{
       header("Location: /school/admin");
     }
 
  
  }else{
  
    return false;
    
     }
  
  
   
  
  }
  
  return true;


    }

// 

    function is_admin(){

      global $connection;
    
     if(isLoggedIn()){
    
      $result = query("SELECT user_role FROM users WHERE user_id = '".$_SESSION['user_id']."'");
      $row = fetchRecord($result);
    
    
      if($row['user_role'] == 'admin' ){
          return true;
      }else{
        return false;
      }
    
     }
     return false;
    
      
    
    }

    
    // ==========================count rows=============

function count_records($result){

  return mysqli_num_rows($result);
}


// ===================query to query=========================
function query($query){

  global $connection;
 $result = mysqli_query($connection,$query);
 confirmQuery($result);
 return $result;

}


//===================================================================================function to check whether user is logged in

function isLoggedIn(){

  if(isset($_SESSION['user_role'])){

    return true;

  }

  return false;


}

// ======================================helper function for the mysqli_fetch_array connection=====================================================

function fetchRecord($result){

  return mysqli_fetch_array($result);

}




function checkUserIsLoogedInAndRedirect($redirectlocation = null){

  if(isLoggedIn()){

    redirect($redirectlocation);
  }

}


//=================================================================================== function to redirect user to a certain location


function redirect($location){

  header("Location" . $location);
  exit;
  
  }


  //==================started building login forgot password here============================ function to check the method


  function IsItMethod($method = null){

    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){

      return true;
    }
    return false;

  }


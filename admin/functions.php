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
  function register_user($user_firstname,$user_lastname ,$username, $email, $password){
  
       global $connection;
       $user_firstname = mysqli_real_escape_string($connection,$user_firstname);
       $user_lastname = mysqli_real_escape_string($connection,$user_lastname);
        $username =  mysqli_real_escape_string($connection,$username);
        $email =  mysqli_real_escape_string($connection,$email);
        $password =  mysqli_real_escape_string($connection,$password);
  
    
  
        $password = password_hash($password,PASSWORD_BCRYPT,array("cost" => 9));
  
  
  
        $query = "INSERT INTO users (user_firtname,user_lastname,username,user_email,user_password,user_role)";
        $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$username}','{$email}','{$password}','student' )";
        $register_users_query = mysqli_query($connection,$query);
  
          confirmQuery($register_users_query);
  
      
  
  
  
  }
  
  
  function users_online() {

    if(isset($_GET['onlineusers'])){
      global $connection;
        
      if(!$connection){
    
        session_start();
        include("../includes/db.php");
    
        
    
      $session                = session_id();
      $time                   = time();
      $time_out_in_seconds    = 05;
      $time_out               = $time - $time_out_in_seconds;
    
      $query = "SELECT * FROM users_online WHERE session = '$session' ";
      $send_query = mysqli_query($connection,$query);
      $count = mysqli_num_rows($send_query);
    
      if($count == NULL){
          mysqli_query($connection,"INSERT INTO users_online(session, time) VALUES('$session','$time')");
      }else{
          mysqli_query($connection,"UPDATE users_online SET time = '$time' WHERE session = '$session'");
    
      }
    $query_users_online = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
    echo $count_users = mysqli_num_rows($query_users_online);
    
    
      }
    
    
    
    
        }//get request isset()
    
      }
      users_online();

?>
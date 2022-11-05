<?php

include("db.php");

session_start();

if(isset($_POST['Clear'])) {
  // Display the user signup form
  unset($_SESSION['new_name']);
  unset($_SESSION['new_email']);
  unset($_SESSION['password']);
  unset($_SESSION['message_error']);
  header("Location: register.php");
  exit;
}

// very simple CSRF safeguard ... code above is better!
if(!isset($_POST['submitok'])) {
  // Display the user signup form
  header("Location: index_template.php");
  exit;
}
else {
  // Process signup submission
  // simple input validation

    if( $_POST['new_name']  == '' or !preg_match("/^[a-zA-Z\s]*$/", $_POST['newname']) or
      $_POST['new_email'] == '' or  $_POST['password'] =='' or $_POST['password_repeat'] =='') {
     $_SESSION['new_name'] = $_POST['new_name'];
     $_SESSION['new_email'] = $_POST['new_email'];
     $_SESSION['password'] = $_POST['password'];
     $_SESSION['message_error'] = 'One or more required fields were left blank. Please fill them in and try again.';
   header("Location: register.php");
   exit;
  }

  $db = dbconnect($hostname,$db_name,$db_user,$db_passwd);


  // Check for existing user (avoid SQL injection)
  $new_email =  mysqli_real_escape_string($db,trim($_POST['new_email']));
  $query = "SELECT * FROM users WHERE email = '" . $new_email ."'";
  $result = @ mysqli_query($db, $query);
  if(!$result){
      showerror($db);
  }


  if(mysqli_num_rows($result) > 0) {
     // fail: email already exists in database
     $_SESSION['new_name'] = $_POST['new_name'];
     $_SESSION['password'] = $_POST['password'];
     $_SESSION['message_error'] = 'A user with that email already exists Please try another.';
     header("Location: register.php");
     exit;
  }

  if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST['new_email'])
  ){
    $_SESSION['new_name'] = $_POST['new_name'];
    $_SESSION['password'] = $_POST['password'];
    $SESSION['message_error'] =  'The email has an invalid format';
    header("Location: register.php");
    exit;
  }

  if(strlen($_POST['password']) < 8){
     // fail: password too small
     $_SESSION['new_email'] = $_POST['new_email'];
     $_SESSION['new_name'] = $_POST['new_name'];
     $_SESSION['message_error'] = 'A password must have at least 8 characters.';
     header("Location: register.php");
    exit;
  }


  if($_POST['password'] != $_POST['password_repeat']){
     // fail: password too small
     $_SESSION['new_email'] = $_POST['new_email'];
     $_SESSION['new_name'] = $_POST['new_name'];
     $_SESSION['password'] = $_POST['password'];
     $_SESSION['message_error'] = 'Passwords do not match';
     header("Location: register.php");
    exit;
  }


  // Check for existing user (avoid SQL injection)
  $new_name =  mysqli_real_escape_string($db,trim($_POST['new_name']));
  $query = "SELECT * FROM users WHERE name = '" . $new_name ."'";
  $result = @ mysqli_query($db, $query);
  if(!$result){
      showerror($db);
  }


  if(mysqli_num_rows($result) > 0) {
     // fail: email already exists in database
     $_SESSION['new_email'] = $_POST['new_email'];
     $_SESSION['password'] = $_POST['password'];
     $_SESSION['message_error'] = 'Name already in use,user another';
     header("Location: register.php");
     exit;
  }

  // success: register new user

  $name = $_POST['new_name'];
  $email    = $_POST['new_email'];
  $password = $_POST['password'];
  $present_date = date("Y-m-d H:i:s");

  $sql_insert = "INSERT INTO users(name,password_digest,email,created_at,updated_at)
                 VALUES('$name','$password','$email','$present_date','$present_date')";

  if(!mysqli_query($db, $sql_insert))
     showerror("failure to create a new user");

  // Close database
  mysqli_close($db);

  $_SESSION['message_type'] = 1;
  unset($_SESSION['message_error']);
  header("Location: register_success.html");

}
?>

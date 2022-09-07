<?php
session_start();

$db_host= "localhost ";  
    $db_user   = "root";  
    $db_password   = "";  
    $dbname     = "lms"; 
    $conn       = new mysqli($db_host,$db_user,$db_password,$db_name);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    } 
    
    if(isset($_POST['username'])&& isset($_POST['usermail'])&& isset($_POST['userpass']) )
    {
    $username=$_POST['username'];
    $usermail=$_POST['usermail'];
    $userpass=$_POST['userpass'];
    
        $sql = "INSERT INTO `traveller` (t_name,t_email,t_pass) 
        VALUES ('$username','$usermail','$userpass')";  
    }
    
?>

// initializing variables
// $username = "";
// $usermail    = "";
// $userpass="";
// $errors = array(); 

// // connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'lms');

// // REGISTER USER
// if (isset($_POST['reg_user'])) {
//   // receive all input values from the form
//   $username = mysqli_real_escape_string($db, $_POST['username']);
//   $usermail = mysqli_real_escape_string($db, $_POST['usermail']);
//   $userpass = mysqli_real_escape_string($db, $_POST['userpass']);
  

//   // form validation: ensure that the form is correctly filled ...
//   // by adding (array_push()) corresponding error unto $errors array
//   if (empty($username)) { array_push($errors, "Username is required"); }
//   if (empty($usermail)) { array_push($errors, "Email is required"); }
//   if (empty($userpass)) { array_push($errors, "Password is required"); }
 
//   // first check the database to make sure 
//   // a user does not already exist with the same username and/or email
//   $user_check_query = "SELECT * FROM traveller WHERE t_name='$username' OR t_email='$usermail' LIMIT 1";
//   $result = mysqli_query($db, $user_check_query);
//   $user = mysqli_fetch_assoc($result);
  
//   if ($user) { // if user exists
//     if ($user['t_name'] === $username) {
//       array_push($errors, "Username already exists");
//     }

//     if ($user['t_email'] === $email) {
//       array_push($errors, "email already exists");
//     }
//   }

  

//   	$query = "INSERT INTO traveller (t_name, t_email, t_pass) 
//   			  VALUES('$username', '$usermail', '$userpass')";
//   	mysqli_query($db, $query);
//   	$_SESSION['username'] = $username;
//   	$_SESSION['success'] = "You are now logged in";
//   	header('location: index.php');
  //}

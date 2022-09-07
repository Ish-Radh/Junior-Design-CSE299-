<!-- 
   
    //$servername = "localhost"; 
   // $username = "root"; 
   // $password = "";
   
   // $database = "lms";
   
     // Create a connection 
    // $conn = mysqli_connect($servername, 
        // $username, $password, $database);
   
    // Code written below is a step taken
    // to check that our Database is 
    // connected properly or not. If our 
    // Database is properly connected we
    // can remove this part from the code 
    // or we can simply make it a comment 
    // for future reference.
   
    //if($conn) {
        //echo "success"; 
    //} 
   // else {
      //  die("Error". mysqli_connect_error()); 
   // } 
// -->


<?php
// // database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

 $con = mysqli_connect('localhost', 'root', '','lms');

// // get the post records
$username = $_POST['username'];
$usermail = $_POST['usermail'];
$userpass = $_POST['userpass'];


// // database insert SQL code
$sql = "INSERT INTO `traveller` (`t_name`, `t_email`, `t_pass`) VALUES ('$username', '$usermail', '$userpass')";

// // insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
echo "Contact Records Inserted";
}
else{
    echo "No connection";
}







// $db_user='root';
// $db_user='';
// $db_name='lms';
// $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
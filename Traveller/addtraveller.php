<?php
include_once('dbConnection.php');

if(isset($_POST['username'])&& isset($_POST['usermail'])&& isset($_POST['userpass']) )
{
$username=$_POST['username'];
$usermail=$_POST['usermail'];
$userpass=$_POST['userpass'];

$sql="INSERT INTO traveller(t_name,t_email,t_pass) VALUES ('$username','$usermail','$userpass')";


if ($conn->query($sql)==TRUE)
{
    echo json_encode("OK");
}
else{
    echo json_encode("Failed");
}
}

?>
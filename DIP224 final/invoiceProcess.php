<?php
include "connect.php";

if($con->connect_error) {
    die("connection Failed". $con->connect_error);
}

$fullname=$_POST['fullname'];
$email=$_POST['email'];


$sql= "SELECT * FROM  WHERE fullname ='$fullname' AND email = '$email'";
$result= $con->query($sql);

if($result->num_rows ==1){
    header("Location: invoice.php");
}
else{
    echo "Login failed. Please check your username and password.";
}

?>
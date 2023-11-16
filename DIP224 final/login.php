<?php
include "connect.php";

if($con->connect_error) {
    die("connection Failed". $con->connect_error);
}

$username=$_POST['username'];
$password=$_POST['password'];


$sql= "SELECT * FROM merchant WHERE username ='$username' AND password = '$password'";
$result= $con->query($sql);

if($result->num_rows ==1){
    session_start();
    $_SESSION['username']= $username;
    header("Location: merchantDash.php");
}
else{
    echo "Login failed. Please check your username and password.";
}

$con->close();





?>
<?php
$con=new mysqli('localhost','root','','dip224'); // making a connection to the database

if(!$con){  // if not connected then show error
    die(mysqli_error($con));
}
?>

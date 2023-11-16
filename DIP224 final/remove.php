<?php

include 'connect.php';

if(isset($_GET['removeid'])){
    //access the deleteid from the url and storing it in our $id variable
    $id=$_GET['removeid'];
   

     // delete from crud where id is equals to the id value returned in above $id variable from url
    $sql="delete from `product` where id=$id";

    
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"Deleted successfully";
       header('location:merchantDash.php');
    }
    else{
        die(mysqli_error($con));
    }


 }

?>
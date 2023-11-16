<?php
//connection
include 'connect.php';
// we use get method to access the variable from url
 if(isset($_GET['denyid'])){
    //access the deleteid from the url and storing it in our $id variable
    $id=$_GET['denyid'];
   

     // delete from crud where id is equals to the id value returned in above $id variable from url
    $sql="delete from `approval` where id=$id";

    
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"Deleted successfully";
       header('location:Dashboard.php');
    }
    else{
        die(mysqli_error($con));
    }


 }

?>
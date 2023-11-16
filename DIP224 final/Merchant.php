<?php

include 'connect.php';

if(isset($_POST['submit'])){  //then only we want to enter and store the data in database
  $username=$_POST['username']; // the name value has been assigned to the name variable
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $company=$_POST['company'];
  $password=$_POST['password'];

  $sql= "insert into `approval` (username,email,mobile,company, password)
  values('$username','$email','$mobile','$company','$password')";


  $result=mysqli_query($con, $sql);
  //if myquery has passed successfully

  if($result){
    echo "Successful, wait for approval within 24 hours for login";

  }
  else{
    die(mysqli_error($con));
  }

}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Merchant Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
  <body>

<div class="container my-5"> <!--Setting top and bottom Margin to 5-->
<form method="post">
    <!--Name input-->
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="username" autocomplete="off">
</div>

  <!--Email input-->
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
</div>

  <!--Mobile input-->
<div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
</div>

  <!--Company name-->
<div class="form-group">
    <label>Company</label>
    <input type="text" class="form-control" placeholder="Enter your company name" name="company" autocomplete="off">
</div>
  
  <!--Password input-->
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>


  
</form>
</div>
        
        <script src="" async defer></script>
    </body>
</html>
<?php
include 'connect.php';
$id=$_GET['approveid'];
$sql1= "Select * from `approval` where id=$id";
$result= mysqli_query($con,$sql1);
$row=mysqli_fetch_assoc($result);
$username=$row['username']; // the name value has been assigned to the name variable
  $email=$row['email'];
  $mobile=$row['mobile'];
  $company=$row['company'];
  $password=$row['password'];

if(isset($_POST['submit'])){  //then only we want to enter and store the data in database
  //$id=$_POST['id'];
  $username=$_POST['username']; // the name value has been assigned to the name variable
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $company=$_POST['company'];
  $password=$_POST['password'];

  $sql= "insert into `merchant` (username,email,mobile,company, password)
  values('$username','$email','$mobile','$company','$password')";

  $sql1="delete * from `approval` where username=$username";


  $result=mysqli_query($con, $sql);
  //if myquery has passed successfully

  if($result && $sql1){
    header("Location: Dashboard.php");
    echo"Successfully Added";

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
        <link rel="stylesheet" href="loginStyle.css">
      </head>
  <body>
  <div class="form-container">
<form action="" method="post" >
        <h3>Approve Merchant</h3>

        <input type="text" name="name" placeholder="Username"
            class="form-control" value="<?php echo "$username";?>">

        <input type="email" name="email"  placeholder="Enter email" value="<?php echo "$email";?>" required>

        <input type="text" name="company" placeholder="Company Name" class="form-control" value="<?php echo "$company";?>">

        <input type="password" name="password" placeholder="Password"  class="form-control" value="<?php echo "$password";?>">

        <input type="submit" name="submit" value="Approve" class="form-btn">

</form>

</div>

   





  


<?php
include 'connect.php';
// connection from database
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="loginStyle.css">
    </head>

    <style>
      html{
        background-color: peachpuff;
      }
    </style>
    <body>
    <header>
        
        
        <a href="#" target="_blank" style="text-decoration:none;" class="logo">Tourism.Co</a>
        <nav class="navbar">
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="index2.html">Home</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="showProduct.php">product</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="showProduct.php">product</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="index.php">Merchant</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="Admin.php">Admin</a>
                </nav>
        
              
        </header>

        <br><br><br><br><br><br>

        <button class="btn btn-primary"><a href="showRating.php" class="text-light">Customer Rating</a></button>
    

  <table class="table">
  <thead>
    <tr>
     <th scope="col">Idenfication number</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Company</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>


  <?php
  // This is where the php code will come at the display wanted area 
  //retrieve data from database and display it here
  $sql="Select * from `approval`";
  $result=mysqli_query($con,$sql);

  if($result){

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $company=$row['company'];
        $password=$row['password'];
        echo'
        <tr >
        <th scope="row">'.$id.'</th>
        <td>'.$username.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$company.'</td>
        <td>'.$password.'</td>
        <td>
        <button type="submit" class="btn btn-primary" ><a href="approve.php?approveid='.$id.'" class="text-light">Approve</a></button>
        <button class="btn btn-danger" ><a href="deny.php?denyid='.$id.'" class="text-light">Delete</a></button>
        </td>
        
        </tr>';

      
        //The last piece of table description was the buttons for operation
    }
  }


  ?>
    
    




    
    

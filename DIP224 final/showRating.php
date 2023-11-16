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

        <button class="btn btn-primary"><a href="Dashboard.php" class="text-light">Back to Dashboard</a></button>
    

  <table class="table">
  <thead>
    <tr>
     <th scope="col">Rating</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Feedbakc</th>
    </tr>
  </thead>
  <tbody>


  <?php
  // This is where the php code will come at the display wanted area 
  //retrieve data from database and display it here
  $sql="Select * from `rating`";
  $result=mysqli_query($con,$sql);

  if($result){

    while($row=mysqli_fetch_assoc($result)){
        $Rate=$row['Rate'];
        $name=$row['Fullname'];
        $email=$row['Email'];
        $number=$row['Phonenumber'];
        $feedback=$row['Feedback'];
        echo'
        <tr >
        <th scope="row">'.$Rate.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$number.'</td>
        <td>'.$feedback.'</td>
        
        </tr>';

      
        //The last piece of table description was the buttons for operation
    }
  }


  ?>

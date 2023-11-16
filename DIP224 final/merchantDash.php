<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $company=$_POST['Cname'];
    $image=$_FILES['file'];
   

    $imagefilename=$image['name'];
   
    $imagefileerror=$image['error'];
  
    $imagefiletemp=$image['tmp_name'];

    $filename_separate= explode('.',$imagefilename);

    $file_extension=strtolower(end($filename_separate));

    $extension=array('jpeg','jpg','png');

    if(in_array($file_extension,$extension)){
        $upload_image='images/'.$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql="insert into `product` (name,price,description,company,image) values
        ('$name','$price','$description','$company','$upload_image')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success👍🏻.</strong>Data entered successfully
            </div>';
        }
        else{
            die(mysqli_error($con));
        }
    }






    



}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <title>Display Data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
         crossorigin="anonymous">
         <link rel="stylesheet" href="loginStyle.css">
         <style>
            img{
                width:100px;
            }

            html{
                background-color: orange;
            }

            </style>





    </head>
    <body>
    <header>
        
        
        <a href="#" target="_blank" style="text-decoration:none;" class="logo">Tourism.Co</a>
        <nav class="navbar">
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="index2.html">Home</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="showProduct.php">product</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="index.php">Merchant</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="Admin.php">Admin</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="Admin.php">Feedback</a>
                    
                </nav>
        
              
        </header>
<br><br><br><br><br><br>



    <button class="btn btn-primary"><a href="addProduct2.php" class="text-light">Add Product</a></button>



        <h1 class="text-center my-4">Products</h1>
        <div class="container mt-5 d-flex justify-content-center ">
        <table class="table table-bordered w-100">
  <thead class="table-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Company</th>
      <th scope="col">Product Image</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql= "Select * from `product`"; //where company=$company
    $result=mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $price=$row['price'];
        $description=$row['description'];
        $company=$row['company'];
        $image=$row['image'];
        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$price.'</td>
        <td>'.$description.'</td>
        <td>'.$company.'</td>
        <td><img src='.$image.' /></td>
        <td>
        <button class="btn btn-primary" ><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <br><hr>
        <button class="btn btn-danger" ><a href="remove.php?removeid='.$id.'" class="text-light">Remove</a></button>
        
        </td>
        
        </tr>';

    }
    

    ?>


   
     
    
  </tbody>
</table>

        </div>

       

        

       
        
        <script src="" async defer></script>
    </body>
</html>
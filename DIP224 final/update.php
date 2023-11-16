<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql= "Select * from `product` where id=$id";
$result= mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$price=$row['price'];
$description=$row['description'];
$company=$row['company'];
$image=$row['image'];



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
        $sql="update `product` set id='$id', name='$name', price='$price',
         description='$description', company='$company', image='$upload_image' where id=$id ";
        $result=mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success👍🏻.</strong>Data Updated successfully
            </div>';
            header("Location:merchantDash.php");

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
         crossorigin="anonymous">
         <link rel="stylesheet" href="loginStyle.css">


    </head>

    <style>

    </style>
    <body>
        <h1>ADD Product</h1>

        <div class="form-container">
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Update Product Details</h3>

        <input type="text" name="name" placeholder="Product Name"
            class="form-control" value="<?php echo "$name";?>" >

        <input type="number" name="price" step="0.01" min="0" 
        placeholder="Enter price" value="<?php echo "$price";?>" required>

        <input name="description"  placeholder="Product Description"
        value="<?php echo "$description";?>">

        <input type="text" name="Cname" placeholder="Company Name"
            class="form-control" value="<?php echo "$company";?>">

        <input type="file" name="file" placeholder="image"
            class="form-control">

        <input type="submit" name="submit" value="Update" class="form-btn">
        
    </form>

</div>


<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index2.html">home</a>
            <a href="#about">about us</a>
            <a href="#">product</a>
            <a href="#">merchant</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Malaysia</a>
            <a href="#">Usa</a>
            <a href="#">Australia</a>
            
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about us</a>
            <a href="#">product</a>
            <a href="#">merchant</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+60177323004</a>
            <a href="#">JinVishJovian@gmail.com</a>
            <a href="#">Help Uni, subang 2 -40170</a>
            <a href="#">Malaysia</a>
        </div>
    </div>



    </section>

       
        
        <script src="" async defer></script>
    </body>
</html>

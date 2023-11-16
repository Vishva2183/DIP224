<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
    <header>
        
        
<a href="#" target="_blank" style="text-decoration:none;" class="logo">Tourism.Co</a>
<nav class="navbar">
            <a  target="_blank" style="text-decoration:none;" class="logo" href="index2.html">Home</a>
            <a  target="_blank" style="text-decoration:none;" class="logo" href="showProduct.php">product</a>
            <a  target="_blank" style="text-decoration:none;" class="logo" href="invoiceForm.php">Invoice</a>
            <a  target="_blank" style="text-decoration:none;" class="logo" href="index.php">Merchant</a>
            <a  target="_blank" style="text-decoration:none;" class="logo" href="Admin.php">Admin</a>
        </nav>

      
</header>

<br><br><br>

<?php
//First we select all attributes from product table
$sql ="select * from `product`";
    $result= mysqli_query($con, $sql);

    //displaying them in the wanted area
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];// assign the variables with value from Database
        $name=$row['name'];
        $price=$row['price'];
        $description=$row['description'];
        $company=$row['company'];
        $image=$row['image'];
        echo'<section class="menu" id="menu">
        <div class="box-container">
    
            <div class="box">
                <img src='.$image.' alt="">
                <h3  >'.$name.'</h3>
                <div class="price">$'.$price.'</div>
                <p class="price">'.$description.'</p>
                
                
    
                <a href="paymentForm.php?buyid='.$id.'" class="btn">Buy Now</a>
            </div>
    
        </div>
    
    </section>';

    }

?>









    































    <?php

    /*$sql ="select name, price, description, company, image from `product`";
    $result= mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($result)){
        $name=$row['name'];
        $price=$row['price'];
        $description=$row['description'];
        $company=$row['company'];
        $image=$row['image'];
        echo '<main>
        <div class="card">
            <div class="image">
                <img src='.$image.' >
            </div>
            <div class="caption">

            <p class="product_name">'.$name.'</p>
            <p class="description">'.$description.'</p>
            <p class="price">'.$price.'</p>
            <p class="company">'.$company.'</p>

            </div>
            <button class="add">Buy now</button>
            

        </div>
    </main> ';



    }*/

    ?>

    <?php
    //while($row = mysqli_fetch_assoc($all_product)){

    
    

    ?>





      <!-- <main>
            <div class="card">
                <div class="image">
                    <img src="<?php //echo $row["image"];  ?>" >
                </div>
                <div class="caption">

                <p class="product_name"><?php //echo $row["name"]; ?></p>
                <p class="description"><?php //echo $row["description"]; ?></p>
                <p class="price"><?php //echo $row["price"]; ?></p>
                <p class="company"><?php //echo $row["company"]; ?></p>

                </div>
                <button class="add">Buy now</button> -->
                <?php
                 
                //}

                ?>

            </div>
        </main>



    
        
        <script src="" async defer></script>
    </body>
</html>
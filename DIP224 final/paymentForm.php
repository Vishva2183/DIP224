<?php
include 'connect.php';
$id=$_GET['buyid'];
$sql1= "Select * from `product` where id=$id";
$result= mysqli_query($con,$sql1);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$price=$row['price'];
$company=$row['company'];



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
        <link rel="stylesheet" href="loginStyle.css">
        
    </head>
    <body>
        <style>
            * {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    transition: all 0.2s linear;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 25px;
    min-height: 100vh;
    background-image:url(banner1.png);
    padding-bottom: 70px;
}

.container form {
    padding: 20px;
    width: 700px;
    background: peachpuff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.container form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.container form .col-md-6 {
    flex: 0 0 calc(50% - 15px);
    max-width: calc(50% - 15px);
}

.container form .title {
    font-size: 20px;
    color: #333;
    padding-bottom: 5px;
    text-transform: uppercase;
}

.container form .form-group {
    margin: 15px 0;
}

.container form label {
    display: block;
    margin-bottom: 5px;
}

.container form .form-control {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
    text-transform: none;
}

.container form .form-control:focus {
    border: 1px solid #000;
}

.container form .img-fluid {
    max-width: 100%;
    height: auto;
    filter: drop-shadow(0 0 1px #000);
}

.container form .btn-primary {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    background: orange;
    color: #fff;
    margin-top: 5px;
    cursor: pointer;
}

.container form .btn-primary:hover {
    background: #2ecc71;
}

.header{
    text-align: center;
}

        </style>
        
        
        <div class="container">
            <form action="process_form.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">Billing Address</h3>
                        <div class="form-group">
                            <label for="full-name">Full Name:</label>
                            <input type="text" class="form-control" id="fullname" name ="fullname" placeholder="Fullname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name = "email" placeholder="example@example.com">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name = "address" placeholder="Street - Lot">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="state">State:</label>
                                <input type="text" class="form-control" id="state" name= "state" placeholder="State">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="zip-code">Zip Code:</label>
                                <input type="text" class="form-control" id="zipcode" name="zipCode" placeholder="98000">
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <h3 class="title">Payment</h3>
                        
                        <div class="form-group">
                            <label for="card-name">Name on Card:</label>
                            <input type="text" class="form-control" id="cardname" name = "cname" placeholder="Mr. Jovian Dominic">
                        </div>

                        <div class="form-group">
                            <label for="card-number">Credit/Debit Card Number:</label>
                            <input type="text" class="form-control" id="cardnumber"  name = "cnumber" placeholder="1111-2222-3333-4444">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exp-month">Expiration Month</label>
                                <input type="text" class="form-control" id="expmonth" name="expiremonth" placeholder="January">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exp-year">Expiration year</label>
                                <input type="text" class="form-control" id="expyear" name = "expireyear" placeholder="2027">
                            </div>

    
                        <div class="form-group">
                            <label for="cvv">CVV:</label>
                            <input type="text" class="form-control" id="CVV" name="cvv" placeholder="098">
                        </div>

                        <div class="form-group">
                            <label for="card-name">Purchased Product Name:</label>
                            <input type="text" class="form-control" id="productname" name = "productName" placeholder="" value=<?php echo "$name";?>>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Product Price</label>
                            <input type="number" step="0.01" min="0" class="form-control" id="price" name = "productPrice" value=<?php echo "$price";?>>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Product Company:</label>
                            <input type="text" class="form-control" id="productname" name = "productCompany" placeholder="" value=<?php echo "$company";?>>
                        </div>
    
                    </div>
                </div>
                <input type="submit" name="submit"  value="Proceed to Checkout" class="btn btn-primary">
            </form>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>
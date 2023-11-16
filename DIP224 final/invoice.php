<?php
include 'connect.php';
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
        
    </head>
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


<body>

<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];

// Query the database to check if the user exists
$query = "SELECT * FROM purchase WHERE  fullname = '$fullname' AND email = '$email'";
$result = $con->query($query);

// Check if the query was successful
if ($result->num_rows > 0) {
    // User exists, display their information
    $invoice = $result->fetch_assoc();
    echo '
    <div class="container">
            <form action="index2.html" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">Simple Web Invoice</h3>
                        <div class="form-group">
                            <label for="full-name">Full Name:</label>
                            <p>'.$invoice['fullname'].'</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <p>'.$invoice['email'].'</p>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <p>'.$invoice['address'].'</p>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Purchased Product Name:</label>
                            <p>'.$invoice['productName'].'</p>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Product Price</label>
                            <p>'.$invoice['productPrice'].'</p>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Product Company:</label>
                            <p>'.$invoice['productCompany'].'</p>
                        </div>
                        <input type="submit" name="submit"  value="HomePage" class="btn btn-primary">
    
                    </div>
                </div>
            </form>
        </div> 
    
    
    ';
    // Add more information as needed
} else {
    // User does not exist or invalid credentials
    header("Location:invoice.php");
    echo "Invalid login credentials. Please try again.";
}

// Close the database connection
$con->close();
?>





        
        
    <!-- <div class="container">
            <form action="process_form.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">Simple Web Invoice</h3>
                        <div class="form-group">
                            <label for="full-name">Full Name:</label>
                            <p>//</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <p>//</p>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <p>//</p>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Purchased Product Name:</label>
                            <p>//</p>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Product Price</label>
                            <p>//</p>
                        </div>
                        <div class="form-group">
                            <label for="card-name">Product Company:</label>
                            <p>//</p>
                        </div>
    
                    </div>
                </div>
                <input type="submit" name="submit"  value="HomePage" class="btn btn-primary">
            </form>
        </div> -->

        <script src="" async defer></script>
    </body>
</html>
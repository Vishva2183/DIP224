<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $name = $_POST['name'];
    $email=$_POST['email'];
    $password = $_POST['password'];


    // Replace these values with your database credentials
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'dip224';

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query the database to check if the provided username and password match
    $query = "SELECT * FROM ministry WHERE name = '$name' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if there is a matching user
    if (mysqli_num_rows($result) == 1) {
        // User is authenticated; you can redirect to the next page
        header("Location: Dashboard.php");
        exit();
    } else {
        // Invalid username or password
        echo "Invalid login credentials. Please try again.";
    }

    // Close the database connection
    mysqli_close($conn);
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    </head>
<style>     
        
header{
    position: fixed;
    top:0;left:0;right:0;
    background-color: peachpuff;
    padding:2rem 8% ;
    display:flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .1);
    

}
header .logo{
    font-size: 3rem;
    color:orange;
    font-weight: bolder;


}

header .logo .span{
    color:var(--pink);
}



header .navbar a{
    font-size: 2rem;
    padding:0 1rem;
    color:orange


}
    </style>
    <body>
    <header>
        
        
        <a href="#" class="logo">Tourism.Co</a>
        <nav class="navbar">
                    <a href="index2.html">Home</a>
                    <a href="index2.html">about us</a>
                    <a href="showProduct.php">product</a>
                    <a href="index.php">Merchant</a>
                    <a href="Mlogin.php">Admin</a>
                </nav>
        
              
        </header>
<br><br><br><br><br><br>




    <h2>Login Please</h2>
<div id="form" class="container my-5">
    <form method="post" >

    <div class="form-group">
        <label for="username">Name:</label>
        <input type="text" name="name" required><br><br>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
    </div>

    <div class="form-group">
        <label for="username">Email</label>
        <input type="email" name="email" required><br><br>
    </div>
        <input type="submit" value="Login">
    </form>

</div>
      
        
        <script src="" async defer></script>
    </body>
</html>


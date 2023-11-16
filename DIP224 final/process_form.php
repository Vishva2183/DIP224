<?php
// Include the database connection file
include('connect.php');

// Retrieve data from the form
$fullname=$_POST['fullname']; // the name value has been assigned to the name variable
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipCode'];
$nameCard=$_POST['cname'];
$cardNum=$_POST['cnumber'];
$expmonth=$_POST['expiremonth'];
$expyear=$_POST['expireyear'];
$cvv=$_POST['cvv'];
$Pname=$_POST['productName'];
$Pprice=$_POST['productPrice'];
$Pcompany=$_POST['productCompany'];

// Insert data into the database
$sql = "insert into `purchase` (fullname, email, address, city, state, zipCode, cname, cnumber, expiremonth,
expireyear, cvv, productName, productPrice, productCompany)
values('$fullname', '$email','$address','$city','$state','$zipcode','$nameCard','$cardNum',
'$expmonth','$expyear','$cvv','$Pname','$Pprice','$Pcompany')";

if (mysqli_query($con, $sql)) {
    echo '<link rel="stylesheet" type="text/css" href="process.css">';
    echo '<div id="myModal" class="modal">
    <div class="modal-content">
    <span class="close" onclick="closeModal()"style="font-size: 100px; padding: 10px 20px; color:white;">&times;</span>
        <p>👍🏻 👍🏻 👍🏻 👍🏻</p>
        <h2> Thank You For Your Purchase </h2>
        
        
        
        <a href="rateus.html" style="text-decoration: none;">
        <button class="o-button" onclick="closeModal()">Rate</button>
        </a>


        
        
    </div>
</div>';
    //echo "👍🏻Data stored in the database successfully👍🏻";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>


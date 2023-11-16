<?php
// Include the database connection file
include('connect.php'); // Change 'db2.php' to the correct file name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone_number']; // Use underscores
    $feedback = $_POST['address'];
    $rating = isset($_POST['rating']) ? $_POST['rating'] : null; // Get the rating if it's set

    // Insert data into the feedback table, including the rating
    $sql = "INSERT INTO `rating` (fullname, email, Phonenumber, feedback, Rate) 
            VALUES ('$fullname', '$email', '$phonenumber', '$feedback', '$rating')";

    if ($con->query($sql) === TRUE) {
        echo '<link rel="stylesheet" type="text/css" href="process.css">';
        echo '<div id="myModal" class="modal"><div class="modal-content">
        <span class="close" onclick="closeModal()"style="font-size: 100px; padding: 10px 20px; color:white;">&times;</span>
        <p> 👍🏻 👍🏻 👍🏻 👍🏻 </p>
        <h2>Thank You For Your Feedback</h2>
        <a href="invoiceForm.php" target="_blank" style="text-decoration: none;">
        <button href="invoiceForm.php" class="o-button">See Invoice</button>
        </a>
        
        
        </div>
        </div>';
        

    
        
        // Add any further processing or feedback here
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>

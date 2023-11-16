<?php

include 'connect.php';

if(isset($_POST['submit'])){  //then only we want to enter and store the data in database
  $username=$_POST['Rusername']; // the name value has been assigned to the name variable
  $email=$_POST['Remail']; 
  $mobile=$_POST['Rmobile']; 
  $company=$_POST['Rcompany'];
  $password=$_POST['Rpassword'];

  $sql= "insert into `approval` (username,email,mobile,company, password)
  values('$username','$email','$mobile','$company','$password')";


  $result=mysqli_query($con, $sql);
  //if myquery has passed successfully

  if($result){
    echo "Successful, You will be able to login after Admin approval.";

  }
  else{
    die(mysqli_error($con));
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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

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

    <header>
        
        
        <a href="#" class="logo">Tourism<span>.</span></a>
        
        <nav class="navbar">
            <a href="index2.html">Home</a>
            <a href="index2.html">about us</a>
            <a href="showProduct.php">product</a>
            <a href="index.php">Merchant</a>
            <a href="Admin.php">Admin</a>
        </nav>
        
</header>


<br><br><br>





        <div class="hero">

            <div class="form-box">
                <div class="button-box">

                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()" >Log in</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>


               <!--First form login-->
                <form class="input-group" id="login" action="login.php" method="POST">

                <h2>Merchant Login</h2>
                <input type="text" class="input-field" id="username" name="username" placeholder="username" required>
                <span id="usernameError" class="error"></span>
                <br>
                <input type="password" class="input-field" id="password" name="password" placeholder="password" required>
                <span id="passwordError" class="error"></span>
                <button type="submit" class="submit-btn" name="login">Log in</button>

                </form>

                <script>

        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Reset errors
            document.getElementById("usernameError").innerHTML = "";
            document.getElementById("passwordError").innerHTML = "";

            // Validate username
            if (username === "") {
                document.getElementById("usernameError").innerHTML = "Username is required";
                return false;
            }

            // Validate password
            if (password === "") {
                document.getElementById("passwordError").innerHTML = "Password is required";
                return false;
            }

            
            console.log("Login successful!");

           
            return false;
        }
    </script>









                
                <!--Second form for register-->
                <form method="POST" class="input-group" id="register">

                <h2>Merchant Register</h2>
                <input type="text" class="input-field" id="Rusername" name="Rusername" placeholder="username" required>
                <span id="RusernameError" class="error"></span>

                <input type="email" class="input-field" placeholder="Enter your email" id="Remail" name="Remail" autocomplete="off">
                <span id="RemailError" class="error"></span>

                <input type="text" class="input-field" placeholder="Enter your mobile number" id="Rmobile" name="Rmobile" autocomplete="off">
                <span id="RmobileError" class="error"></span>

                <input type="text" class="input-field" placeholder="Enter your company name" id="Rcompany" name="Rcompany" autocomplete="off">
                <span id="RcompanyError" class="error"></span>

                <input type="password" class="input-field" id="Rpassword" name="Rpassword" placeholder="password" required>
                <span id="RpasswordError" class="error"></span>

                <button type="submit" class="submit-btn" name="submit">Register</button>

                </form>

        
        <script>
        function validateForm1() {
            var username = document.getElementById("Rusername").value;
            var email = document.getElementById("Remail").value;
            var mobile = document.getElementById("Rmobile").value;
            var company = document.getElementById("Rcompany").value;
            var password = document.getElementById("Rpassword").value;


            // Reset errors
            document.getElementById("RusernameError").innerHTML = "";
            document.getElementById("RemailError").innerHTML = "";
            document.getElementById("RmobileError").innerHTML = "";
            document.getElementById("RcompanyError").innerHTML = "";
            document.getElementById("RpasswordError").innerHTML = "";

            // Validate username
            if (username === "") {
                document.getElementById("RusernameError").innerHTML = "Username is required";
                return false;
            }

            // Validate email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById("RemailError").innerHTML = "Invalid email address";
                return false;
            }

            // Validate mobile number
            var mobileRegex = /^\d{10}$/;
            if (!mobileRegex.test(mobile)) {
                document.getElementById("RmobileError").innerHTML = "Invalid mobile number";
                return false;
            }

            // Validate company name
            if (company === "") {
                document.getElementById("RcompanyError").innerHTML = "Company name is required";
                return false;
            }

            // Validate password
            if (password === "") {
                document.getElementById("RpasswordError").innerHTML = "Password is required";
                return false;
            }

         
            console.log("Registration successful!");

        
            return false;
        }
    </script>
















            </div>
        </div>

        <script>// javascript for the button animation and the form transition
            var x = document.getElementById("login"); //login form 
            var y = document.getElementById("register");// register form
            var z = document.getElementById("btn"); // the button

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }


      
        
       </script>
    </body>
</html>
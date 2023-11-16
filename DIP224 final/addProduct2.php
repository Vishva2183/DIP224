<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="loginStyle.css">
</head>

<body>
    <header>
        
        
        <a href="#" target="_blank" style="text-decoration:none;" class="logo">Tourism.Co</a>
        <nav class="navbar">
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="index2.html">Home</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="showProduct.php">product</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="index.php">Merchant</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="Admin.php">Admin</a>
                    <a  target="_blank" style="text-decoration:none;" class="logo" href="invoiceForm.php">Feedback</a>
                    
                </nav>
        
              
        </header>
<div class="form-container">
    <form action="merchantDash.php" method="post" enctype="multipart/form-data">
        <h3>Add Product</h3>
        <div class="form-group my-4">
    <input type="text" name="name" placeholder="Product Name"
    class="form-control"  >
</div>

<div class="form-group my-4">
<input type="number" name="price" step="0.01" min="0" 
placeholder="Enter price" class="form-control"   required>
</div>

<div class="form-group my-4">
<input name="description"  placeholder="Product Description" class="form-control"  >
</div>

<div class="form-group my-4">
    <input type="text" name="Cname" placeholder="Company Name"
    class="form-control">
</div>

<div class="form-group my-4">
    <input type="file" name="file" placeholder="image"
    class="form-control">
</div>

<button class="form-btn" type="submit" name="submit">Add</button>
        
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
    
</body>
</html>
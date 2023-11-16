<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="rateus.css">
    </head>
    <body>
        <div class="container">
            <form action="invoice.php" method="POST">
                <div class="row">
                    <h3 class="title">Invoice</h3>
                        <p>Please fill in with name and email to view invoice </p>
                    <div class="col-md-9">


                    
                        
                       
                        <div class="form-group">
                            <label for="full-name">Full Name:</label>
                            <input type="text" class="form-control" id="fullname" name ="fullname" placeholder="Jovian Dominic" style="width:660px">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name = "email" placeholder="example@example.com" style="width:660px">
                        </div>
                        <input type="submit" name="submit"  value="Generate Invoice" class="btn btn-primary">
                       
        </body>
</html>        
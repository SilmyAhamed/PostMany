<?php 
    require 'models.php';
    $insertCustomer = insertCustomer();
?>
<html>
    <head>
        <title>Customer | PostMany</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">PostMany</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="company.php">Company</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="customer.php">Customer <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- form for customer data insert -->
        <div class="container">
            <form class="mt-4" method="post">
                <h3>Customer Data Insert</h3>
                <div class="form-group">
                    <label>Company ID</label>
                    <input type="number" class="form-control" name="company_id" placeholder="Company ID">
                </div>
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" placeholder="Customer Name">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="email" class="form-control" name="email_id" placeholder="Email ID">
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="number" class="form-control" name="contact" placeholder="Contact">
                </div>
                <button type="submit" name="save" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>
</html>
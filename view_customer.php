<?php
    require 'models.php';
    $displayCompanyPerPage = displayCompanyPerPage();
    $displayCustomer = displayCustomer();
?>
<html>
    <head>
        <title>Home | PostMany</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">PostMany</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="company.php">Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer.php">Customer</a>
                    </li>
                </ul>
            </div>
        </nav> -->

        <!-- Display customer ditails -->
        <div class="container mt-4">
            <a class="btn btn-outline-dark mb-2" href="index.php">Go back</a>
            <table class="table mt-2 w-25">
                <tr>
                    <td><th>Company ID</th></td>
                    <td><?php echo $displayCompanyPerPage->company_id; ?></td>
                </tr>
                <tr>
                    <td><th>Company Name</th></td>
                    <td><?php echo $displayCompanyPerPage->company_name; ?></td>
                </tr>
            </table>
            <table class="table mt-4 table-hover">           
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Email ID</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $displayCustomer->customer_name; ?></td>
                        <td><?php echo $displayCustomer->email_id; ?></td>
                        <td><?php echo $displayCustomer->contact; ?></td>
                        <td></td>
                    </tr>
                </tbody>            
            </table>
        </div>
    
    </body>
</html>
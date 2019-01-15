<?php

    require 'database.php';

    // insert company details
    function insertCompany()
    {
        $connection = getConnection();
        if(isset($_POST['submit']))
        {
            $company_id = $_POST['company_id'];
            $company_name = $_POST['company_name'];
            $email_id = $_POST['email_id'];
            $telephone = $_POST['telephone'];

            if($company_id != "" && $company_name != "" && $email_id != "" && $telephone != "")
            {
                $query = 'INSERT INTO company(company_id, company_name, email_id, telephone) VALUES(:company_id, :company_name, :email_id, :telephone)';
                $result = $connection->prepare($query);
                $result->execute([':company_id' => $company_id, ':company_name' => $company_name, ':email_id' => $email_id, ':telephone' => $telephone]);
                header('location:index.php');
            }
        }
    }

    // insert customer deatails
    function insertCustomer()
    {
        $connection = getConnection();
        if(isset($_POST['save']))
        {
            $company_id = $_POST['company_id'];
            $customer_name = $_POST['customer_name'];
            $email_id = $_POST['email_id'];
            $contact = $_POST['contact'];

            if($company_id != "" && $customer_name != "" && $email_id != "" && $contact != "")
            {
                $query = 'INSERT INTO customer(company_id, customer_name, email_id, contact) VALUES(:company_id, :customer_name, :email_id, :contact)';
                $result = $connection->prepare($query);
                $result->execute([':company_id' => $company_id, ':customer_name' => $customer_name, ':email_id' => $email_id, ':contact' => $contact]);
                header('location:index.php');
            }
        }
    }

    // Display company details
    function displayCompany()
    {
        $connection = getConnection();
        $query = 'SELECT * FROM company ORDER BY company_id';
        $result = $connection->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    // Display company ID and company name per page
    function displayCompanyPerPage()
    {
        $connection = getConnection();
        $id = $_GET['id'];
        $query = 'SELECT * FROM company WHERE company_id = :id';
        $result = $connection->prepare($query);
        $result->execute([':id' => $id]);
        return $result->fetch(PDO::FETCH_OBJ);
    }

    // Display customer in view_customer.php page
    function displayCustomer()
    {
        $connection = getConnection();
        $id = $_GET['id'];
        $query = 'SELECT customer.customer_name, customer.email_id, customer.contact FROM company, customer WHERE company.company_id = :id';
        $result = $connection->prepare($query);
        $result->execute([':id' => $id]);
        return $result->fetch(PDO::FETCH_OBJ);
    }

?>
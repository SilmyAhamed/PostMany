<?php

    function getConnection()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'postmany';

        try
        {
            $connection = new PDO("mysql:host=$host; dbname=$database", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'database connected';
        }
        catch(PDOException $error)
        {
            $error->getMessage();
        }
        return $connection;
    }
    // $connection = getConnection();

?>
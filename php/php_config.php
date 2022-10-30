<?php
    //open connection to mysql db

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fivem_db";
    $conn = new mysqli($hostname, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  
?>
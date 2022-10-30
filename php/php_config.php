<?php
    $servername = "localhost";
    $username = "rong1";
    $password = "rong1011";
    $dbname = "fivem_db";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  
?>
<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "root@Mysql1";

    try{
    // Create Connection
    $conn = new mysqli($server_name, $user_name, $password);

    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
    }
    catch(Exception $e){
        echo $e;
    }
?>
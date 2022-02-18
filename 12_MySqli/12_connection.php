<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db = "my_person_contacts";
    

    try{
        // Create Connection
        $conn = mysqli_connect($server_name, $user_name, $password);
        // echo "Connected successfully! <br/>";

        // CREATE DATABASE 'my_person_contacts' IF NOT EXISTS
        $db_sql = "CREATE DATABASE IF NOT EXISTS $db";
        $db_result = mysqli_query($conn, $db_sql);
        // echo "DB Created Successfully!<br/>";
        
        // Select Database
        $use_db_result = mysqli_select_db($conn, $db);

    }
    catch(Exception $e){
        echo "OPPS! ".$e->getMessage()."<br/>";
    }
?>
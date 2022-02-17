<?php
    require_once "12_connection.php";
?>

<?php

    $table_contacts = "my_contacts";

    try{

        // Create 'my_contacts' TABLE IF NOT EXISTS
        $table_contacts_sql = "CREATE TABLE IF NOT EXISTS $table_contacts (

        `id` int(11) NOT NULL AUTO_INCREMENT,

        `full_names` varchar(255) NOT NULL,

        `gender` varchar(6) NOT NULL,

        `contact_no` varchar(75) NOT NULL,

        `email` varchar(255) NOT NULL,

        `city` varchar(255) NOT NULL,

        `country` varchar(255) NOT NULL,

        PRIMARY KEY (`id`)

        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5";

        $table_contacts_result = mysqli_query($conn, $table_contacts_sql);
        if(!$table_contacts_result){
        echo "Error occured while creating Database Table!<br/>";
        } 
        echo "Table for Contacts created Successfully!<br/>";


        // INSERT SOME DEFAULT DATA to the 'my_contacts' TABLE
        $table_contacts_default_insert_sql = "INSERT INTO `my_contacts` 
            (`id`, `full_names`, `gender`, `contact_no`, `email`, `city`, `country`) 
        VALUES
            (1, 'Zeus', 'Male', '111', 'zeus@olympus.mt.co', 'Agos', 'Greece'),
            
            (2, 'Anthena', 'Female', '123', 'anthena@olympus.mt.co', 'Athens', 'Greece'),
            
            (3, 'Jupiter', 'Male', '783', 'jupiter@planet.pt.co', 'Rome', 'Italy'),
            
            (4, 'Venus', 'Female', '987', 'venus@planet.pt.co', 'Mars', 'Italy')          
        ";
        $table_contacts_default_insert_result = mysqli_query($conn, $table_contacts_default_insert_sql);
        echo "Default Data Inserted Sucessfully!<br/>";
    }
    catch(Exception $e){
        echo "OPPS! ".$e->getMessage()."<br/>";
    }




?>
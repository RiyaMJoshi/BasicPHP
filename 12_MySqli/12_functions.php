<?php
    require_once '12_connection.php';
/*
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db = "my_person_contacts";
*/

/*
    // Create Connection and Database
    function create_connection(){
        
        try{
            // Create Connection
            $conn = new mysqli($server_name, $user_name, $password);
            // echo "Connected successfully! <br/>";

            // CREATE DATABASE 'my_person_contacts' IF NOT EXISTS
            $db_sql = "CREATE DATABASE IF NOT EXISTS $db";
            $db_result = mysqli_query($conn, $db_sql);
            // echo "DB Created Successfully!<br/>";
            
            $use_db_result = mysqli_select_db($conn, $db);

        }
        catch(Exception $e){
            echo "OPPS! ".$e->getMessage()."<br/>";
        }
    }
*/

// Create Table 'my_contacts'
function create_contacts_table(){
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

    }
    catch(Exception $e){
        echo "OPPS! ".$e->getMessage()."<br/>";
    }
}


// Insert Default Data to the Table
function insert_default_data(){
    try{
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
}


// Get Data From 'my_contacts'
function get_contacts(){
    $table_contacts = "my_contacts";
    try{
        $select_contacts_sql = "SELECT * FROM $table_contacts";
        $select_contacts_result = mysqli_query($conn, $select_contacts_sql);

        if (!$select_contacts_result)   
            //output error message if query execution failed   
            die("Database access failed: " . mysqli_error()); 
            
        // get number of rows returned 
        $rows = mysqli_num_rows($select_contacts_result); 
        //echo "<br/>Total no. of Rows: $rows <br/>";

        if($rows){
            ?>

            <table style="border-spacing:15px">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>
                <?php
                while($row = mysqli_fetch_array($select_contacts_result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";         
                    echo "<td>" . $row['full_names'] . "</td>";        
                    echo "<td>" . $row['gender'] . "</td>";         
                    echo "<td>" . $row['contact_no'] . "</td>";         
                    echo "<td>" . $row['email'] . "</td>";         
                    echo "<td>" . $row['city'] . "</td>";         
                    echo "<td>" . $row['country'] . "</td>"; 
                    echo "</tr>";  
                }
                ?>
                </table>
                <br/>
                <form method="POST" action="addOneRecord.php">
                    <input type="submit" name="addRecordBtn" value="Add a Record">
                </form>
                <?php
        }

    }
    catch(Exception $e){
        echo "OPPS! ".$e->getMessage()."<br/>";
    }
    
}

// Add a new Record
function add_a_record(){
    try{
        // Add Row on Button Click
        if(isset($_POST['addRecordBtn'])){
            $insert_sql = "INSERT INTO `my_contacts` (
                `full_names`,`gender`,`contact_no`,`email`,`city`,`country`
                )
                VALUES ('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
        
            $insert_result = mysqli_query($conn,$insert_sql); //execute SQL statement 
        
            echo "Poseidon has been successfully added to your contacts list";
        }
    }
    catch(Exception $e){
        echo "OPPS! ".$e->getMessage()."<br/>";
    }
}
?>
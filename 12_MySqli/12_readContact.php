<?php
    require_once '12_connection.php';
    // require_once '12_tables.php';
?>

<?php
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
            while($row = mysqli_fetch_assoc($select_contacts_result)){
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
            <form method="POST" action="">
                <input type="submit" name="addRecordBtn" value="Add a Record">
                <input type="submit" name="refreshRecordBtn" value="Refresh Records">
                <input type="submit" name="updateRecordBtn" value="Update Record">
                <input type="submit" name="DeleteRecordBtn" value="Delete Record">
            </form>
            <?php
    }

    // Add Row on Button Click
    if(isset($_POST['addRecordBtn'])){
        $insert_sql = "INSERT INTO `my_contacts` (
            `full_names`,`gender`,`contact_no`,`email`,`city`,`country`
            )
            VALUES ('Poseidon','Male','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
	    $insert_result = mysqli_query($conn,$insert_sql); //execute SQL statement 
        $last_id = mysqli_insert_id($conn); // get id of last inserted record
        echo "Poseidon with ID '$last_id' has been successfully added to your contacts list<br/>";
    }

    // Refresh Records on Button Click
    if(isset($_POST['refreshRecordBtn'])){
        echo "<meta http-equiv='refresh' content='0'>";
    }

    // Update Record for Poseidon on Button Click
    if(isset($_POST['updateRecordBtn'])){
        $id = 5;
        $update_sql = "UPDATE `my_contacts` SET `contact_no` = '785' , `email` = 'poseidon@ocean.oc'";
        $update_sql .= "WHERE `id` = $id";

        $update_result = mysqli_query($conn, $update_sql);
        echo "Record for Poseidon (ID: $id) updated successfully<br/>";
    }

    // Delete Record for Poseidon on Button Click
    if(isset($_POST['DeleteRecordBtn'])){
        $id = 5;
        $delete_sql = "DELETE FROM `my_contacts` WHERE `id` = $id";

        $delete_result = mysqli_query($conn, $delete_sql);
        echo "Record for Poseidon (ID: $id) deleted successfully<br/>";
    }
}
catch(Exception $e){
    echo "OPPS! ".$e->getMessage()."<br/>";
}
    

?>

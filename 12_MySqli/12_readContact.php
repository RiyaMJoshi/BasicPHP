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
            <form method="POST" action="">
                <input type="submit" name="addRecordBtn" value="Add a Record">
                <input type="submit" name="refreshRecords" value="Refresh Records">
            </form>
            <?php
    }

    // Add Row on Button Click
    if(isset($_POST['addRecordBtn'])){
        $insert_sql = "INSERT INTO `my_contacts` (
            `full_names`,`gender`,`contact_no`,`email`,`city`,`country`
            )
            VALUES ('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
	    $insert_result = mysqli_query($conn,$insert_sql); //execute SQL statement 
    
        echo "Poseidon has been successfully added to your contacts list";
    }

    // Refresh Records on Button Click
    if(isset($_POST['refreshRecords'])){
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
catch(Exception $e){
    echo "OPPS! ".$e->getMessage()."<br/>";
}
    

?>

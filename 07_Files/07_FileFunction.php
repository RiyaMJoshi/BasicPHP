<?php
    $file_name = "my_settings.txt";
    // Check for file existance
    if(file_exists($file_name)){
        echo "File '$file_name' Found.";
        echo "<br/>";

        // Open file
        $fh = fopen("my_settings.txt", 'r') or 
                die("You lack permission to open this file!");

        // Read file contents 'Line by Line'
        $line = fgets($fh);
        echo "<b>File Content using 'fgets()' is: </b><br/>";
        echo $line; 

        // Close the file
        fclose($fh);
    }
    else{
        echo "Oops.. File '$file_name' doesn't exists!";
    }
    
?>

<br/> <br/>
<form method="POST">
    <input type="submit" value="Copy File" name="copy_btn">
    <input type="submit" value="Delete Copy" name="delete_copy_btn">
    <input type="submit" value="Get File Content" name="get_contents_btn">
</form>

<?php
    
    // Check if 'copy_btn' is set i.e. Clicked
    if (isset($_POST['copy_btn'])) {
        $copied_file_name = "my_settings_backup.txt";

        //Copy file
        copy($file_name, $copied_file_name) or
            die("Could not copy file!");
        echo "File Successfully copied to 'my_settings_backup.txt";
    }

    // Check if 'delete_copy_btn' is set i.e. Clicked
    if(isset($_POST['delete_copy_btn'])) {

        // Unlink (delete) backup file
        if (!unlink('my_settings_backup.txt')) {
            echo "Could not delete file!";
        }
        else {
            echo "File 'my_settings_backup.txt' successfully deleted"; 
        }
    }

    // Check if 'get_contents_btn' is set i.e. Clicked
    if(isset($_POST['get_contents_btn'])) {

        echo "<b>File Content using 'file_get_contents()' is: </b><br/>";
        echo "<pre>"; // Enables display of line feeds

        // Read entire file contents
        echo file_get_contents("my_settings.txt");
        echo "</pre>"; // Terminates pre tag
    }
?>
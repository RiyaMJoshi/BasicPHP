<?php
    $file_name = "my_settings.txt";
    // Check for file existance
    if(file_exists($file_name)){
        echo "File '$file_name' Found.";
        echo "<br/>";
        $fh = fopen("my_settings.txt", 'r') or 
                die("You lack permission to open this file!");
        $line = fgets($fh);
        echo "<b>File Content is: </b><br/>";
        echo $line; 
        fclose($fh);
    }
    else{
        echo "Oops.. File '$file_name' doesn't exists!";
    }
    
?>

<br/> <br/>
<form method="POST">
    <input type="submit" value="Copy File" name="copy_btn">
</form>

<?php
    
    if (isset($_POST['copy_btn'])) {
        //copy_file();
        $copied_file_name = "my_settings_backup.txt";
        copy($file_name, $copied_file_name) or
            die("Could not copy file!");
        echo "File Successfully copied to 'my_settings_backup.txt";
    }
?>
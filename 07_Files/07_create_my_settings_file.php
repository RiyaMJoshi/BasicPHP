<?php 

// Open File in write mode or Die if error occurs.
$fh = fopen("my_settings.txt", 'w') or die("Failed to create file"); 

$text = "localhost;root;pwd1234;my_database"; 

// Write text to the File or Die if error occurs.
fwrite($fh, $text) or die("Could not write to file"); 

// Close the opened file.
fclose($fh); 

echo "File 'my_settings.txt' written successfully"; ?> 
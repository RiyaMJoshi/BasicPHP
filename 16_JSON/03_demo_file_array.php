<?php
// echo "<h2>Convert Array to JSON Array</h2>";
$myArr = array("John", "Mary", "Peter", "Sally");

// Arrays in PHP will also be converted into JSON when using the PHP function json_encode()
$myJSON = json_encode($myArr);

// echo "JSON Array: ";
echo $myJSON;
?>
<?php
// The stdClass is the empty class in PHP which is used to cast other types to object.
$myObject = new stdClass(); 

$myObject->name = "John";
$myObject->age = 30;
$myObject->city = 'New York';

// Convert Class Object to JSON Object
// Objects in PHP can be converted into JSON by using the PHP function json_encode()
$myJSON = json_encode($myObject);
echo $myJSON;
?>

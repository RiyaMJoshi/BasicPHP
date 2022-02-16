<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeZones</title>
</head>
<body>
<?php

echo "<b>List of available time zone identifiers:</b><br/>";
$timezone_identifiers = DateTimeZone::listIdentifiers();
echo "Total available timezones: ". count($timezone_identifiers)."<br/>";
echo "<ul>";
foreach($timezone_identifiers as $key => $list){
    echo "<li>". $list . "</li>";
}
echo "</ul>";

?>
</body>
</html>
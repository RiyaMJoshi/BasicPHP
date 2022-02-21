<!DOCTYPE html>
<html>
<body>

<?php
$br = "<br/>";

date_default_timezone_set("Asia/Calcutta");
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s") . $br;
echo date("d-M-Y") . $br;
echo date("r"). $br;
echo date("A") . " / " . date("a"). $br;
echo time() . $br;
echo mktime(0,0,0,10,13,2025) . $br;
echo date("g") . $br; 
echo date("G") . $br;
echo date("h") . $br; 
echo date("H") . $br;
echo date("i") . $br; 
echo date("s") . $br;
echo date("D") . $br;
echo date("l") . $br;
echo date("m") . $br;
echo date("F") . $br;
echo date("L") . $br;
echo date("y") . $br;
?> 

</body>
</html>
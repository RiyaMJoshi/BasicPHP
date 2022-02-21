<?php

$b = "<b>";
$b_end = "</b>";
$break = "<br/><br/>";

echo "<h4>My Commenting System</h4>";

$user_input = "Your site rocks";
echo "$b Normal $b_end User Input: " . $user_input;
echo $break;

$user_input = "<script>alert('Your site sucks!');</script>";
echo "$b Normal $b_end User Input Alert: " . $user_input;
echo $break;

// The strip_tags functions removes HTML, JavaScript or PHP tags from a string.
echo "$b Stripped $b_end User Input Alert: " . strip_tags($user_input);
echo $break;

/* 
    The filter_var function is used to validate and sanitize data.
    Validation checks if the data is of the right type. 
    A numeric validation check on a string returns a false result.
    Sanitization is removing illegal characters from a string.
*/
echo "$b Sanitized Stripped $b_end User Input: " . filter_var($user_input, FILTER_SANITIZE_STRIPPED);
echo $break;


/* 
    mysqli_real_escape_string function.
    This function is used to protect an application against SQL injection. 
*/

$uid = "' OR 1 = 1 -- ";
$pwd = "1234";
$sql = "SELECT uid,pwd,role FROM users WHERE uid = '$uid' AND password = '$pwd';";

echo "$b Normal $b_end SQL String: " . $sql;
echo $break;

/*
    $uid = mysqli_real_escape_string("' OR 1 = 1 -- ");
    $pwd = mysqli_real_escape_string("1234");
    $sql = "SELECT uid,pwd,role FROM users WHERE uid = '$uid' AND password = '$pwd';";
    echo "$b Using mysqli $b_end SQL String: " . $sql;
    echo $break;
*/
// The above code will output: 
// SELECT uid,pwd,role FROM users WHERE uid = '\' OR 1 = 1 -- ' AND password = '1234';

echo "MD5 Hash for 'password': " . md5("password") . $break;
echo "SHA1 Hash for 'password': " . sha1("password") . $break;
?>
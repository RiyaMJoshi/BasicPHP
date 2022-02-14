<?php 
        define('NAME', 'Riya Joshi'); // Constant with define()
        $age = 21; # Variable with $
        $email_label = 'You can reach me out at my E-mail ID ';
        $email_id = 'riyajoshi312@gmail.com';
        /*
            the 
            first 
            line 
        */
        echo "I am from \"Simform\"...";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>
<body>
    <h1>User Profile</h1>
    <div><?php echo 'Hey, my name is <b>'. NAME . '</b>'; ?></div>
    <div><?php echo "My age is $age years <br>"; ?></div>
    <div><b><?php echo $email_label.$email_id ?></b></div>
    <?php 

        // String Operators
        echo "<h3> String Operations</h3>";
        echo "Length: ".strlen(NAME)."<br/>";
        echo "ToUpper: ".strtoupper(NAME)."<br/>";
        echo "ToLower: ".strtolower(NAME)."<br/>";
        echo "5th char: ".NAME[5]."<br/>";
        echo "str_replace: ".str_replace('Riya', 'Parul', NAME)."<br/>";
        echo "var_dump($age): ". var_dump($age)."<br/>";
        echo "var_dump(NAME): ".var_dump(NAME)."<br/>";

        // Increment/ Decrement Operators
        echo "<h3>Increment/ Decrement: </h3>";
        $n = 5;
        echo "Initial: $n <br/>";
        echo "n++: ".$n++ ."<br/>";
        echo "n: $n <br/>";
        echo "n--: ".$n-- ."<br/>";
        echo "n: $n <br/>";
        echo "++n: ".++$n ."<br/>";
        echo "n: $n <br/>";
        echo "--n: ".--$n."<br/>";
        echo "n: $n <br/>";

        // Logical Operators
        echo "<h3>Logical operators: </h3>";
        // and (&&)
        // or (||)
        // xor
        // !

        $myVar = (true and false);
        echo "true and false: ";
        echo var_dump($myVar)."<br/>";

        $myVar = (true or false);
        echo "true or false: ";
        echo var_dump($myVar)."<br/>";

        $myVar = (true xor false);
        echo "true xor false: ";
        echo var_dump($myVar)."<br/>";

        $myVar = (false xor false);
        echo "false xor false: ";
        echo var_dump($myVar)."<br/>";

        $myVar = (!true);
        echo "!true: ";
        echo var_dump($myVar)."<br/>";

        $myVar = (!true and false);
        echo "!true and false: ";
        echo var_dump($myVar)."<br/>";

        $myVar = (!false and true);
        echo "!false and true: ";
        echo var_dump($myVar)."<br/>";

        // DataTypes in PHP: int, float, string, bool, array, object
        echo "<h3>DataTypes: </h3>";
        $a = 1;
        var_dump($a);
        $b = 1.5;
        var_dump($b);
        $c = "I Love PHP";
        var_dump($c);
        $d = true;
        var_dump($d); 
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP | 1</title>
    <style>
       *{
            padding: auto;
            margin: auto;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            margin: auto;
            padding: 23px;
            background-color: #cabf9b;
        }
        a:link, a:visited { color: rgb(0, 136, 255);}
    </style>
</head>
<body>
    <div class="container">
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
        echo "I am from \"Simform\"...\n";
        $word="word";
        $pwd = "pas\$word";
        echo $pwd;
    ?>
    <h1>User Profile</h1>
    <div><?php echo 'Hey, my name is <b>'. NAME . '</b>'; ?></div>
    <div><?php echo "My age is $age years <br>"; ?></div>
    <div><b><?php echo $email_label.$email_id ?></b></div>
    <?php 
        
        echo "var_dump($age): ". var_dump($age)."<br/>";
        echo "var_dump(NAME): ".var_dump(NAME)."<br/>";
        echo "<br/>";
        
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
    </div>
</body>
</html>
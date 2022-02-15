<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP | 3</title>
    
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
            background-color: #e6cdcd;
        }
        a:link, a:visited { color: rgb(0, 136, 255);}
    </style>
</head>
<body>
    <div class="container">
        <h1>Functions in PHP</h1>
        <br/>
    <?php
        define('NAME', 'Riya Joshi'); // Constant with define()
        
        // String Functions
        echo "<h3> String Functions</h3>";
        echo NAME."<br/>";
        echo "Length: ".strlen(NAME)."<br/>";
        echo "ToUpper: ".strtoupper(NAME)."<br/>";
        echo "ToLower: ".strtolower(NAME)."<br/>";
        echo "5th char: ".NAME[5]."<br/>";
        echo "str_word_count: ".str_word_count(NAME)."<br/>";
        echo "strrev: ".strrev(NAME)."<br/>";
        echo "Search 'Jo' using strpos: ".strpos(NAME, 'Jo')."<br/>";
        echo "str_replace: ".str_replace('Riya', 'Parul', NAME)."<br/>";
        $my_var = "This is a really long sentence that I wish to cut short";
        echo "Initial String: $my_var <br/>";
        echo "substr: ".substr($my_var,0, 12)."…<br/>";

        echo "<br/>";
        echo "<a href='https://www.guru99.com/php-strings.html'>More String Stuff Here..</a>";
        echo "<br/><br/>";


        // Numeric Functions
        echo "<h3> Numeric Functions</h3>";
        $data = "guru";
        if(is_numeric($data))
        { echo "is_numeric($data): true"; }
        else
        { echo "is_numeric($data): false"; }
        echo "<br/>";
        echo "number_format(2509663): ".number_format(2509663)."<br/>";
        echo "rand(): ".rand()."<br/>";
        echo "pi(): ".pi()."<br/>";
        echo "<br/>";


        // Date Functions
        echo "<h3> Date Functions</h3>";
        // Print the array from getdate()
        echo "getdate(): ";
        print_r(getdate());
        echo "<br/>";

        // Return date/time info of a timestamp; then format the output
        $mydate=getdate(date("U"));
        echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] <br/>";
        // $date=date_create("2013-03-15");
        // echo "Date: $date <br/>";
        // date_add($date,date_interval_create_from_date_string("40 days"));
        // echo "After 40 days: ".date_format($date,"Y-m-d");
        echo "<br/>";
        echo "<a href='https://www.w3schools.com/php/php_ref_date.asp'>More Date Stuff Here..</a>";
        echo "<br/><br/>";

        // User Defined Functions
        echo "<h3> User Defined Functions</h3>";
        function add_numbers($a, $b){   
            echo "Addition of $a and $b: ".$a + $b."<br/>";
        }
        add_numbers (4, 6);
        add_numbers (2,36);
        echo "<br/>";

        function kilometers_to_miles($kilometers = 0)
        {
            $miles_scale = 0.62;
            echo "$kilometers Km = ";
            return $kilometers * $miles_scale;
        }
        echo kilometers_to_miles(100)."Miles<br/>";
        echo kilometers_to_miles()."Miles<br/>";
    ?>
    </div>
    
</body>
</html>
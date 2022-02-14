<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>

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
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's Learn About PHP</h1>
        <!-- If-Else Statement -->
        <p>Your party status is here: </p>
        <?php 
            $age = 22;
            if($age == 7){
                echo "You are 7 years old!";
            }
            else if($age > 18){
                echo "You can go to the party!";
            }
            else{
                echo "You can not go to the party!";
            }
            echo "<br/>";
            echo "<br/>";
        ?>

        <!-- Array and Loops -->
            <!-- Numeric Array -->
        <?php 
            echo "<h3>Numeric Array</h3>";
            $languages = array("Python", "C++", "Java", "PHP", "NodeJS");
            // echo $languages;  # 'echo' Can't be used; array can't be converted to string.
            echo "<b>Languages using print_r(): </b><br/>";
            print_r($languages);
            
            //Or, loop can be used.
            echo "<br/><br/>";
            echo "First Lang: $languages[1]<br/>";
            echo "Total Lang: ".count($languages)."<br/>";
            $languages[10] = ".Net";
            echo "Total Lang: ".count($languages)." (newly added at 10th index)<br/>";
            echo "<br/>";

            // Basic While Loop
            echo "<b>While Loop.. </b><br/>";
            $a = 20;
            while ($a <= 10) {
                echo $a." "; // Won't print anything onto the screen as a > 10.
            }
            echo "<br/>";

            // While Loop - Array
            $a = 0;
            while ($a < count($languages)) {
                echo "$a $languages[$a]<br/>";
                $a++;
            }
            echo "<br/>";

            // Basic Do While Loop
            echo "<b>Do While Loop.. </b><br/>";
            $a = 20;
            do{
                echo $a." "; // Will print atleast once onto the screen although a > 10.
            }while ($a <= 10);
            echo "<br/>";

             // Do While Loop - Array
             $a = 0;
             while ($a < count($languages)) {
                 echo "$a $languages[$a]<br/>";
                 $a++;
             }
             echo "<br/>";

            // For Loop - Array
            echo "<b>For Loop.. </b><br/>";
            for ($i=0; $i < count($languages); $i++) { 
                echo "$i $languages[$i]<br/>";
            }
            echo "<br/>";

            // ForEach Loop - Array
            echo "<b>ForEach  Loop.. </b><br/>";
            foreach ($languages as $i => $value) {
                echo "$i $value<br/>";
            }
            echo "<br/>";
        ?>
            <!-- Associative Array -->
            <?php 
                echo "<h3>Associative Array</h3>";
                $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
                echo "<b>Persons using print_r(): </b><br/>";
                print_r($persons); 
                echo "<br/>"; 
                echo "Mary is a " . $persons["Mary"]; 
                echo "<br/><br/>";               
            ?>

            <!-- Multi-Dimensional Array -->
            <?php
                echo "<h3>Multi Dimensional Array</h3>";
                $movies =array(
                "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
                "action" => array("Die Hard", "Expendables"),
                "epic" => array("The Lord of the rings"),
                "Romance" => array("Romeo and Juliet")
                );
                echo "<b>Movies using print_r(): </b><br/>";
                print_r($movies);
                echo "<br/><br/>";

                echo "<b>Another way to define:</b><br/>";
              
                $film=array(

                    "comedy" => array(

                        0 => "Pink Panther",

                        1 => "john English",

                        2 => "See no evil hear no evil"

                        ),

                    "action" => array (

                        0 => "Die Hard",

                        1 => "Expendables"

                        ),

                    "epic" => array (

                        0 => "The Lord of the rings"

                        ),

                    "Romance" => array

                        (

                        0 => "Romeo and Juliet"

                        )

                );
                echo '$film["comedy"][0]: '.$film["comedy"][0];
            ?>
            <br/><br/>
            <a href="https://www.guru99.com/arrays.html">Get Full Detailed Blog on Arrays here @ Guru99</a>
            <br/><br/>

            <!-- PHP Array - OPERATORS -->
            <?php
                echo "<h3>PHP Array - OPERATORS</h3>";
                $a = array('id' => "1");
                $x = array('id' => 1);
                $y = array('value' => 10);
                // Union 
                $z = $x + $y;
                echo '<b>$z = $x + $y: </b>';
                print_r($z);
                echo "<br/>";

                // Equal
                echo '<b>$x == $a: </b>';
                if($x == $a)
                {
                    echo "true";
                }
                else
                {
                    echo "false";

                }
                echo "<br/>";

                /*  
                    Similarly, 
                        1. x === a (Identical)	Compares both the values and data types
                        2. x != a, x <> a	(Not equal)
                        3. x !== a	(Non identical)	
                */
            ?>

            <!-- PHP Array Functions -->
            <?php
                echo "<br/>";
                echo "<h3>PHP Array Functions</h3>";
                $lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
                echo '<b>count($lecturers): </b>'.count($lecturers);
                echo "<br/>";
                echo '<b>is_array($lecturers): </b>'.is_array($lecturers);
                echo "<br/><br/>";

                /*
                    Sort:
                    This function is used to sort arrays by the values.
                    If the values are alphanumeric, it sorts them in alphabetical order.
                    If the values are numeric, it sorts them in ascending order.
                    It removes the existing access keys and add new numeric keys.
                    The output of this function is a numeric array
                
                */
                $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
                echo '<b>$persons: </b><br/>';
                print_r($persons);
                sort($persons);
                echo "<br/>";
                echo '<b>sort($persons): </b><br/>';
                print_r($persons);
                echo "<br/>";

                /*
                    ksort:
                    This function is used to sort the array using the key. 
                
                */
                $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
                ksort($persons);
                echo '<b>ksort($persons): </b><br/>';
                print_r($persons);
                echo "<br/>";

                /*
                    asort:
                    This function is used to sort the array using the values. 
                
                */
                $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
                asort($persons);
                echo '<b>asort($persons): </b><br/>';
                print_r($persons);
                echo "<br/>";
            ?>
    </div>
   
</body>
</html>
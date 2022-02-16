<?php
/*
    //error handler function
    function customError($errno, $errstr) {
        echo "Opps, Something went wrong: <b>Error:</b> [$errno] $errstr";
    }

    //set error handler
    set_error_handler("customError");

    //trigger error
    echo(5/0); 
    // Doesn't showing the output correctly in browser but,
    //It results into: "Opps, Something went wrong: Error: [2] Division by zeroINF"

*/
?>

<?php
    //error handler function
    function customError($errno, $errstr) {
        echo "Opps, something went wrong: ";
        echo "<b>Error number: </b>[$errno] ";
        echo "<b>Error Description: </b>[$errstr]";
    }

    //set error handler
    set_error_handler("customError");

    //trigger error
    echo($test);
?>
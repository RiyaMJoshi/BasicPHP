<title>Regex Basic</title>
<?php
    // Syntax: function_name('/pattern/',subject);

    // preg_match(/pattern/, string)
    $my_url = "www.Simformsolutions.com";
    echo "<b>URL: </b> $my_url<br/>";
    
    if (preg_match("/Simform/", $my_url))
    {
        echo "Match found: The url $my_url contains Simform";
    }
    else
    {
        echo "Math doesn't found: The url $my_url does not contain Simform";
    }
    echo "<br/><br/>";


    // preg_split(/pattern/, string)
    $my_text="I Love Regular Expressions";
    echo "<b>Text: </b> $my_text <br/>Splitted text: ";
    
    $my_array  = preg_split("/ /", $my_text);

    print_r($my_array );
    echo "<br/><br/>";


    // preg_replace(/pattern/, replacement_string, original_string)
    $text = "We at Simform strive to make quality projects affordable to the masses. Simformsolutions.com";
    echo "<b>Text: </b> $text <br/>Replaced text: ";
    
    $text = preg_replace("/Simform/", '<span style="background:yellow">Simform</span>', $text);

    echo $text;
    echo "<br/><br/>";

    // preg_grep(pattern, input, flags): returns an array containing only elements from the input that match the given pattern.
    $input = [
        "Red",
        "Pink",
        "Green",
        "Blue",
        "Purple"
      ];
      
    echo "<b>Array: </b>";
    print_r($input);
    echo "<br/>Elements starting with 'p' (using grep): ";

    $result = preg_grep("/^p/i", $input);
    print_r($result);
    echo "<br/><br/>";

    
    // preg_quote(): adds a backslash to characters that have a special meaning 
    // in regular expressions so that searches for the literal characters can be done. 
    // This function is useful when using user input in regular expressions.
    $search = preg_quote("://", "/");
    $input = 'https://www.w3schools.com/';
    $pattern = "/$search/";
    echo "<b>URL: </b> $input <br/>";
    if(preg_match($pattern, $input)) {
        echo "The input is a URL.";
    } else {
        echo "The input is not a URL.";
    }
    echo "<br/><br/>";

?>
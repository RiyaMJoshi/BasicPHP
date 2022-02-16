<?php
    session_start(); // Start the PHP Session

    if(isset($_SESSION['page_count'])){
        $_SESSION['page_count'] += 1;
    }
    else{
        $_SESSION['page_count'] = 1;
    }
    echo "You are visiting this site for the ".$_SESSION['page_count']." time.";
    echo "<br/><a href='06_SessionUnset.php'>Unset PageCount<a>";
    echo "<br/><a href='06_SessionDestroy.php'>Destroy Entire Session<a>";

?>
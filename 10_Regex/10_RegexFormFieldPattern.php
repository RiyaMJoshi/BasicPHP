<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate using regex</title>
</head>
<body>
    <form action="" method="post">
        Enter Email-ID: 
        <input type="text" name="email" placeholder="a@b.com">
        <br/><br/>
        Enter Contact#: 
        <input type="text" name="contact" placeholder="9898787801">
        <br/><br/>
        <input type="submit" name="submit" value="Validate">
        <br/> <br/>
    </form>   
    
    <?php 
        if(isset($_POST['submit'])){
            $email_id = $_POST['email'];
            $contact = $_POST['contact'];
            // email-id validation
            if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email_id)) {
                echo "$email_id is a valid email address";
            }
            else
            {
                echo "$email_id is NOT a valid email address";
            }
            echo "<br/>";

            // contact-number validation
            if (preg_match("/^[7-9]+[0-9]{9}$/", $contact)) {
                // if (preg_match("/^([+]?[0-9]{0,3}+[-]?)?+[7-9]+[0-9]{9}$/", $contact)) {
                echo "$contact is a valid contact number";
            }
            else
            {
                echo "$contact is NOT a valid contact number";
            }
            echo "<br/>";
        }
    ?>
</body>
</html>
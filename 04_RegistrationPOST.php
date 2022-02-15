<html>
<head>
	<title>Registration Form | 4</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?> 
        <!-- this code is executed when the form is submitted -->
        <?php if (!isset($_POST['agree'])): ?>
            <p>You have not accepted our terms of service</p>
        <?php else: ?>
            <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>

            <p>You have been registered as
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
            </p>

            <p>Go <a href="04_RegistrationPOST.php">back</a> to the form</p>
        <?php endif; ?>
    <?php else: ?>

            <h2>Registration Form</h2>

            <form action="04_RegistrationPOST.php" method="POST">

                 First name:
                <input type="text" name="firstname">
                
                <br><br> Last name:
                <input type="text" name="lastname">

                <br><br> *Agree to Terms of Service:
                <input type="checkbox" name="agree">
                
                
			    <input type="hidden" name="form_submitted" value="1" />
                <br><br>
                <input type="submit" value="Submit">

            </form>

    <?php endif; ?> 
</body> 
</html>